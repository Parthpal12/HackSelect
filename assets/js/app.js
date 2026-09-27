document.querySelectorAll('[data-confirm]').forEach(x=>x.addEventListener('click',e=>{if(!confirm(x.dataset.confirm))e.preventDefault()}));
const q=document.querySelector('#searchProblems');if(q)q.addEventListener('input',()=>{const v=q.value.toLowerCase();document.querySelectorAll('.problem-card').forEach(c=>c.style.display=c.innerText.toLowerCase().includes(v)?'block':'none')});
