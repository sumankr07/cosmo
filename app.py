from flask import Flask, render_template, request, redirect, url_for, session, flash

app = Flask(__name__)
app.secret_key = 'your_secret_key'

users = {
    "test@example.com": "1234"
}

@app.route('/')
def home():
    return render_template('home.html')

@app.route('/about-us')
def about():
    return render_template('about.html')

@app.route('/contact')
def contact():
    return render_template('contact.html')

@app.route('/faq')
def faq():
    return render_template('faq.html')

@app.route('/blog')
def blog():
    return render_template('blog.html')

@app.route('/login', methods=['POST'])
def login():
    email = request.form['email']
    password = request.form['password']

    if email in users and users[email] == password:
        session['user'] = email
        return redirect(url_for('home'))
    else:
        return redirect(url_for('home'))

@app.route('/create-account')
def create_account():
    return render_template('create-account.html')
    
@app.route('/dashboard')
def dashboard():
    if 'user' in session:
        return render_template('dashboard.html', user=session['user'])
    else:
        return redirect(url_for('home'))
    
@app.route('/my-profile')
def my_profile():
    if 'user' in session:
        return render_template('my-profile.html', user=session['user'])
    else:
        return redirect(url_for('home'))
    
@app.route('/my-property')
def my_property():
    if 'user' in session:
        return render_template('my-property.html', user=session['user'])
    else:
        return redirect(url_for('home'))
    
@app.route('/submit-property')
def submit_property():
    if 'user' in session:
        return render_template('submit-property.html', user=session['user'])
    else:
        return redirect(url_for('home'))
    
@app.route('/change-password')
def change_password():
    if 'user' in session:
        return render_template('change-password.html', user=session['user'])
    else:
        return redirect(url_for('home'))
    
@app.route('/logout')
def logout():
    session.pop('user', None)
    return redirect(url_for('home'))
    
if __name__ == '__main__':
    app.run(port=5003, debug=True)