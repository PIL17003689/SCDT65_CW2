from flask import Flask, render_template
import subprocess

app = Flask(__name__, static_url_path='/static')

def execute_php(php_file):
    php_script = f"php {php_file}"
    result = subprocess.run(php_script, shell=True, capture_output=True, text=True)
    if result.returncode == 0:
        return result.stdout
    else:
        return f"Error executing PHP: {result.stderr}"
        

@app.route("/")
def home():
    title = 'Weather Forecasting'
    php_output = execute_php('templates/index.php')
    return php_output

if __name__ == "__main__":
    app.run(debug=True)
