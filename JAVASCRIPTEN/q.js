function calculateResult() {
  const form = document.forms['quizForm'];
  const answers = [form.q1.value, form.q2.value, form.q3.value, form.q4.value, form.q5.value];

  if (answers.includes("")) {
    document.getElementById("error").innerText = " Debes contestar todas las preguntas antes de continuar.";
    document.getElementById("result").innerText = "";
    return;
  } else {
    document.getElementById("error").innerText = "";
  }

  let counts = { visual: 0, contemporaneo: 0, popular: 0, graficas: 0 };

  answers.forEach(ans => { if (ans) counts[ans]++; });

  let max = 0;
  let result = '';
  for (let key in counts) {
    if (counts[key] > max) {
      max = counts[key];
      result = key;
    }
  }

  let mensaje = "✨ Tu arte por conocer es: ";
  let redirect = "";

  if (result === 'visual') {
    mensaje += "ARTE VISUAL 🎨";
    redirect = "artesVisuales.php";
  }
  if (result === 'contemporaneo') {
    mensaje += "ARTE CONTEMPORÁNEO 🖼️";
    redirect = "arteContemporaneo.php";
  }
  if (result === 'popular') {
    mensaje += "ARTE POPULAR 🎭";
    redirect = "artesPopulares.php";
  }
  if (result === 'graficas') {
    mensaje += "ARTES GRÁFICAS 💻";
    redirect = "artesGraficas.php";
  }

  document.getElementById("result").innerText = mensaje;

  setTimeout(() => {
    window.location.href = redirect;
  }, 3000);
}


document.addEventListener('DOMContentLoaded', function() {
  const savedTheme = localStorage.getItem('theme') || 'light';
  document.body.setAttribute('data-theme', savedTheme);

  const themeToggle = document.getElementById('themeToggle');
  if (themeToggle) {
    themeToggle.addEventListener('click', function() {
      const currentTheme = document.body.getAttribute('data-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      
      document.body.setAttribute('data-theme', newTheme);
      localStorage.setItem('theme', newTheme);
    });
  }
});