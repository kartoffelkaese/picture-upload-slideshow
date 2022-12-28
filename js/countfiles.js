	const input = document.querySelector('#files');
	const fileCount = document.querySelector('#fileCount');
	const selectImage = document.querySelector('#select');
	const labelfiles = document.querySelector('#labelfiles');
	
	input.addEventListener('change', function() {
	  const files = this.files;
	  if (files.length > 0) {
		fileCount.innerHTML = `${files.length} Datei(en) ausgewählt.` + "<br><br><img src='img/arrow-grn.png' alt='pfeil' class='pfeil bouncy'>";
		selectImage.style.display = "none";
		labelfiles.classList.remove("glow", "bouncy");
	  } else {
		fileCount.innerHTML = '';
		selectImage.style.display = "inline";
		labelfiles.classList.add("glow", "bouncy");
	  }
	});
	