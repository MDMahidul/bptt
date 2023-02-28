/* const cardsContainers = document.getElementsByClassName("card");
  for(const cardsContainer of cardsContainers){
    cardsContainer.addEventListener('click',(event)=>{
      if(event.target.classList.contains('read-more')){
        const blogTitle = document.getElementById('blog-title').innerText;
        const blogBody =  document.getElementById('blog-body').innerText;
       const imgTag =  document.getElementById('blog-img').getAttribute('src');


       
        localStorage.setItem('blog-title',blogTitle);
        localStorage.setItem('blog-des',blogBody);
        localStorage.setItem('blog-img',imgTag);

         window.location.href="fullblogpage.html";
      }
    })
  }
 */

/* const cardGroups =  document.getElementsByClassName("card-group");
cardGroups.forEach(cardGroup=>{
  const card = document.getElementsByClassName('card')
  card.addEventListener('click',(event)=>{
    if(event.target.classList.contains('read-more')){
      const blogTitle = document.getElementById('blog-title').innerText;
      const blogBody =  document.getElementById('blog-body').innerText;
     const imgTag =  document.getElementById('blog-img').getAttribute('src');
  
  
     
      localStorage.setItem('blog-title',blogTitle);
      localStorage.setItem('blog-des',blogBody);
      localStorage.setItem('blog-img',imgTag);
  
       window.location.href="fullblogpage.html";
    }
  })
}) */

const readMoreBtns = document.getElementsByClassName('read-more');
  for(const readMoreBtn of readMoreBtns){
    readMoreBtn.addEventListener('click',(event)=>{
        
        //get the blog-title
        const card = event.target.closest('.card');
        const modal = document.querySelector('#exampleModal');
        const modalImage = document.querySelector('#modal-image');
        const modalTitle = document.querySelector('h1');
        const modalDescription = document.querySelector('#modal-description');
        const closeBtn = document.querySelector('#close');
  
          // Get the data from the card
        const imageSrc = card.querySelector('img').getAttribute('src');
        const title = card.querySelector('#blog-title').innerHTML;
        const description = card.querySelector('#blog-body').innerHTML;

        // Set the data in the modal
        modalImage.setAttribute('src', imageSrc);
        modalTitle.innerHTML = title;
        modalDescription.innerHTML = description;
        

    })
  }
