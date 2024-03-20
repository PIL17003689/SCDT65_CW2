from flask import Flask, render_template

app = Flask(__name__, static_url_path='/static')

@app.route('/')
def index():
    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True)


@app.route('/<page_name>')
def show_page(page_name):
    return render_template(page_name)