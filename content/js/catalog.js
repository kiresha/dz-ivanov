const modal = document.getElementById('modal');
const closeBtn = document.getElementById('closeModal');
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
  const btn = card.querySelector('.meet');
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    const name = card.querySelector('h3').textContent;
    const age = card.querySelector('.head span').textContent;
    const breed = card.querySelector('.breed').textContent;
    const desc = card.querySelector('.desc').textContent;
    const img = card.querySelector('.img-wrap img').src.replace('w=300&h=300','w=400&h=400');
    const badge = card.querySelector('.tag-yellow, .tag-green');
    document.getElementById('m-name').textContent = name;
    document.getElementById('m-age').textContent = age;
    document.getElementById('m-breed').textContent = breed;
    document.getElementById('m-desc').textContent = '«' + desc + '»';
    document.getElementById('m-img').src = img;
    const mb = document.getElementById('m-badge');
    if(badge){ mb.textContent = badge.textContent; mb.style.display = 'block'; mb.className = badge.classList.contains('tag-green') ? 'tag-green' : 'tag-yellow'; }
    else { mb.style.display = 'none'; }
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
  });
});

closeBtn.addEventListener('click', () => { modal.classList.remove('show'); document.body.style.overflow = ''; });
modal.addEventListener('click', (e) => { if(e.target === modal){ modal.classList.remove('show'); document.body.style.overflow = ''; } });
document.addEventListener('keydown', (e) => { if(e.key === 'Escape' && modal.classList.contains('show')){ modal.classList.remove('show'); document.body.style.overflow = ''; } });
document.getElementById('form').addEventListener('submit', (e) => { e.preventDefault(); alert('Заявка отправлена! Мы свяжемся с вами в ближайшее время.'); modal.classList.remove('show'); document.body.style.overflow = ''; e.target.reset(); });