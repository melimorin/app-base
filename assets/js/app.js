// javascript link injection de font awesome
const fa = document.createElement('link');
fa.rel = 'stylesheet';
fa.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css';
 document.head.appendChild(fa);

// javascript link injection de google font
const googleFont = document.createElement('link');
googleFont.rel = 'stylesheet';
googleFont.href = 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Playfair+Display&display=swap';
 document.head.appendChild(googleFont);