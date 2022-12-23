document.addEventListener('DOMContentLoaded', function () {
   const designer = document.getElementById('designer');
   designer.addEventListener('submit', formSend);

   async function formSend(e) {
      e.preventDefault();

      let error = formValidate(designer);

      // let formData = new FormData(designer);
      // if (error === 0) {
      //    designer.classList.add('_sending');
      //    let response = await fetch('sendmail.php', {
      //       method: 'POST',
      //       body: designerData
      //    });
      //    if (response.ok) {
      //       let result = await response.json();
      //       alert(result.message);
      //       form.reset();
      //       form.classList.remove('_sending');
      //    } else {
      //       alert("Error");
      //       form.classList.remove('_sending');
      //    }
      // } else {
      //    alert('Fill in required fields');
      // }
   }

   function formValidate(designer) {
      let error = 0;
      let formReq = document.querySelectorAll('._req');

      for (let index = 0; index < formReq.length; index++) {
         const input = formReq[index];
         designerRemoveError(input);

         // Додати клас для попАпу
         if (input.classList.contains('_email')) {
            if (emailTest(input)) {
               designerAddError(input);
               error++;
            }
         } else {
            if (input.value === '') {
               designerAddError(input);
               error++;
            }
         }
      }
      return error;
   }
   function designerAddError(input) {
      input.parentElement.classList.add('_error');
      input.classList.add('_error');
   }
   function designerRemoveError(input) {
      input.parentElement.classList.remove('_error');
      input.classList.remove('_error');
   }

   // Функція тесту email
   function emailTest(input) {
      return !/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(input.value);
   }

   // Отримуємо інтуп file в змінну
   const formImage = document.getElementById('formImage');
   // Отримуємо div для прев'ю в змінну
   const formPreview = document.getElementById('formPreview');
   // Слідкуємо за змінами в інпуті file
   formImage.addEventListener('change', () => {
      uploadFile(formImage.files[0]);
   });
});