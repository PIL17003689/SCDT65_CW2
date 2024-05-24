from flask import Flask, request, render_template, jsonify
import numpy as np
import pickle
from sklearn.preprocessing import LabelEncoder

app = Flask(__name__, static_url_path='/static')

print("Loading model...")
with open("neural_network_model.pkl", "rb") as f:
    model = pickle.load(f)

print("Loading scaler...")
with open("scaler.pkl", "rb") as f:
    scaler = pickle.load(f)

label_encoder = LabelEncoder()

all_labels = ["label1", "label2", "label3", "Unknown"]
label_encoder.fit(all_labels)

@app.route('/predict', methods=['POST'])
def predict():
    temperature = float(request.form.get('temperature', 0.0))
    humidity = float(request.form.get('humidity', 0.0))
    wind_speed = float(request.form.get('wind_speed', 0.0))

    input_features = np.array([[temperature, humidity, wind_speed]])
    
    # Use scaler and make predictions
    scaled_data = scaler.transform(input_features)
    prediction = model.predict(scaled_data)
    
    predicted_class = np.argmax(prediction)
    
    if predicted_class < len(label_encoder.classes_):
        daily_summary = label_encoder.inverse_transform([predicted_class])[0]
    else:
        daily_summary = "Unknown" 
    
    return jsonify({'daily_summary': daily_summary})

# Loads page based on page name
@app.route('/<page_name>')
def show_page(page_name):
    return render_template(page_name)

# Loads index
@app.route('/')
def index():
    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True)
