document.getElementById('save').addEventListener('click', (e) => {

      let xhr = new XMLHttpRequest();
      let formData = new FormData();

      var content = 'ola';
      formData.append('content',content);

      xhr.open('POST','http://localhost/FiqOn/arquivo.php',true);

      xhr.onreadystatechange = () => {
        if(xhr.readyState == 4){
          if(xhr.status == 200){
            console.log(xhr.responseText);
            alert("Success");
          }
        }
      }
      xhr.send(formData);
  });