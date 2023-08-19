<section>
   <div class="basic-info">
      <img src="https://images.unsplash.com/photo-1607779097040-26e80aa78e66?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80" alt="">
      <div class="info-text">
         <h4>
         Atunci cand intram intr-un salon Igiena, patrundem intr-un 
         univers dominat de traditia bogata a 65 de ani de activitate 
         neintrerupta, de profesionalismul angajatilor si de adevarata 
         arta care transpare din orice serviciu oferit de Igiena.
         </h4>
         <p>
         “Puterea Igiena sta in oamenii sai. Unitatea societatii a 
         fost mentinuta prin liantul uman si, de aceea, obiectivele 
         de viitor sunt legate de pregatirea continua a profesionistilor 
         ce lucreaza in saloane. Acestia vor beneficia in continuare 
         de expertiza celor mai buni stilisti ai domeniului datorita 
         cursurilor de pregatire si participarii la seminarii de 
         profil atat in tara cat si in strainatate”
         
         - Daniela Dragan, Presedintele Societatii si al Consiliului de Administratie
         </p>
         <div class="counter-style">
            <div class="counter-container">
               <span class="counter" data-target="56"> 0 </span>
               <h5>
                  Saloane de <br> coafura
               </h5>
            </div>
            <div class="counter-container">
               <span class="counter" data-target="900"> 0 </span>
               <h5>
                  Specialisti in <br> Frumusete
               </h5>
            </div>
         </div>
      </div>
         
   </div>
</section>
<script>
   function startCounters() {
   const counters = document.querySelectorAll('.counter');
   const options = {
      threshold: 0.5
   };

   const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
         if (entry.isIntersecting) {
         const target = entry.target;
         const targetNumber = parseInt(target.dataset.target);
         const duration = 1000;
         let currentNumber = 0;
         const step = Math.ceil(targetNumber / (duration / 10));

         const counterInterval = setInterval(() => {
            currentNumber += step;
            if (currentNumber >= targetNumber) {
               clearInterval(counterInterval);
               currentNumber = targetNumber;
               observer.unobserve(target);
            }
            target.textContent = currentNumber;
         }, 10);
         }
      });
   }, options);

   counters.forEach((counter) => {
      observer.observe(counter);
   });
   }

   startCounters();
</script>