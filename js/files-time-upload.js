const form = document.getElementById('upload-form');
form.addEventListener('submit', () => {
  const formData = new FormData(form);
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'upload.php');
  let startTime, elapsedTime;

  // Calculate and display the estimated time left
  xhr.upload.addEventListener('loadstart', (e) => {
    startTime = new Date().getTime();
  });
  xhr.upload.addEventListener('progress', (e) => {
    elapsedTime = new Date().getTime() - startTime;
    if (e.lengthComputable) {
      const percentComplete = (e.loaded / e.total) * 100;
      document.getElementById('upload-progress').value = percentComplete;
      const totalTime = elapsedTime / (percentComplete / 100);
      const timeLeft = totalTime - elapsedTime;
      document.getElementById('time-left').innerHTML = `Noch circa ${Math.round(timeLeft / 1000)} Sekunden.`;
    }
  });
  xhr.addEventListener('readystatechange', () => {
    if (xhr.readyState === 4) {
      // The upload is complete
      document.getElementById('upload-progress').value = 100;
      document.getElementById('time-left').innerHTML = '';
    }
  });
  xhr.send(formData);
});
