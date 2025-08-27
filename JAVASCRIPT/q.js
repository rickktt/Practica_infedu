function calculateResult() {
  const form = document.forms['quizForm'];
  const answers = [form.q1.value, form.q2.value, form.q3.value, form.q4.value, form.q5.value];

  // Check if any question is unanswered
  if (answers.includes("")) {
    document.getElementById("error").innerText = "⚠️ You must answer all questions before continuing.";
    document.getElementById("result").innerText = "";
    return;
  } else {
    document.getElementById("error").innerText = "";
  }

  // Count answers
  let counts = { visual: 0, contemporary: 0, popular: 0, graphics: 0 };
  answers.forEach(ans => { if (ans) counts[ans]++; });

  // Determine the most selected category
  let max = 0;
  let result = '';
  for (let key in counts) {
    if (counts[key] > max) {
      max = counts[key];
      result = key;
    }
  }

  // Prepare message and redirect URL
  let message = "✨ Your recommended art type is: ";
  let redirect = "";

  if (result === 'visual') {
    message += "VISUAL ART 🎨";
    redirect = "artesVisuales.php";
  }
  if (result === 'contemporary') {
    message += "CONTEMPORARY ART 🖼️";
    redirect = "arteContemporaneo.php";
  }
  if (result === 'popular') {
    message += "POPULAR ART 🎭";
    redirect = "artesPopulares.php";
  }
  if (result === 'graphics') {
    message += "GRAPHIC ARTS 💻";
    redirect = "artesGraficas.php";
  }

  // Show result
  document.getElementById("result").innerText = message;

  // Redirect after 3 seconds
  setTimeout(() => {
    window.location.href = redirect;
  }, 3000);
}

// Theme toggle logic
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
