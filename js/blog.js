
  /* blog read more button */
//   const readMoreBtns = document.getElementsByClassName('read-more');
//   for(const readMoreBtn of readMoreBtns){
//     readMoreBtn.addEventListener('click',()=>{
//         //get the blog-title
//         const blogTitle = document.getElementById('blog-title').innerHTML;
//         const blogBody =  document.getElementById('blog-body').innerHTML;
//         const imgTag =  document.getElementById('blog-img').getAttribute("src");
  
//         /* set data to full blog page from the blog page */
//         const fullBlogImgtag = document.getElementById('fullblog-img');
//         fullBlogImgtag.setAttribute('src',imgTag);
//         const fullBlogTitle =  document.getElementById('blog-modal-title');
//         fullBlogTitle.innerText = blogTitle;
//     })
//   }
  const readMoreBtns = document.getElementsByClassName('read-more');
  for(const readMoreBtn of readMoreBtns){
    readMoreBtn.addEventListener('click',(event)=>{
        
        //get the blog-title
        const card = document.querySelector('.card');
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
