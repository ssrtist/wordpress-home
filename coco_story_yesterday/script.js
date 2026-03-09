// Image list discovered at project creation time
const images = [
  "images/page01.png",
  "images/page02.png",
  "images/page03.jpg",
  "images/page04.png",
  "images/page05.png",
  "images/page06.png",
  "images/page07.png",
  "images/page08.png",
  "images/page09.png",
  "images/page10.png",
  "images/page11.png",
  "images/page12.png",
];

let idx = 0;
const imgEl = document.getElementById('pageImage');
const captionEl = document.getElementById('caption');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const firstBtn = document.getElementById('first');
const lastBtn = document.getElementById('last');
const pager = document.getElementById('pager');

function update() {
  imgEl.src = images[idx];
  imgEl.alt = `Page ${idx+1}`;
  captionEl.textContent = `${idx+1} / ${images.length} — ${images[idx].split('/').pop()}`;
  prevBtn.disabled = idx === 0;
  nextBtn.disabled = idx === images.length - 1;
  pager.textContent = `Page ${idx+1} of ${images.length}`;
}

prevBtn.addEventListener('click', ()=>{ if(idx>0){ idx--; update(); } });
nextBtn.addEventListener('click', ()=>{ if(idx < images.length-1){ idx++; update(); } });
firstBtn.addEventListener('click', ()=>{ idx = 0; update(); });
lastBtn.addEventListener('click', ()=>{ idx = images.length-1; update(); });

// Keyboard navigation
window.addEventListener('keydown', (e)=>{
  if(e.key === 'ArrowRight' || e.key === 'PageDown') nextBtn.click();
  if(e.key === 'ArrowLeft' || e.key === 'PageUp') prevBtn.click();
  if(e.key === 'Home') firstBtn.click();
  if(e.key === 'End') lastBtn.click();
});

// touch swipe (very simple)
let startX = null;
document.querySelector('.page-frame').addEventListener('touchstart', e=>{ startX = e.touches[0].clientX; });
document.querySelector('.page-frame').addEventListener('touchend', e=>{
  if(startX == null) return; const endX = e.changedTouches[0].clientX; const dx = endX - startX; if(dx < -40) nextBtn.click(); if(dx > 40) prevBtn.click(); startX = null;
});

// Preload small set around current index for snappy navigation
function preloadAround(i){
  [i-1,i+1].forEach(j=>{ if(j>=0 && j<images.length){ const im = new Image(); im.src = images[j]; }});
}

imgEl.addEventListener('load', ()=>{ preloadAround(idx); });

// Initialize
update();
