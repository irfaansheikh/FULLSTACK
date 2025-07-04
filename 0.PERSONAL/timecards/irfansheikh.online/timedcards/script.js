const data = [
    {
        place:'Switzerland Alps',
        title:'SAINT',
        title2:'ANTONIEN',
        description:'Tucked away in the Switzerland Alps, Saint Antönien offers an idyllic retreat for those seeking tranquility and adventure alike. It\'s a hidden gem for backcountry skiing in winter and boasts lush trails for hiking and mountain biking during the warmer months.',
        image:'images/timed-cards-1.jpg'
    },
    {
        place:'Japan Alps',
        title:'NANGANO',
        title2:'PREFECTURE',
        description:'Nagano Prefecture, set within the majestic Japan Alps, is a cultural treasure trove with its historic shrines and temples, particularly the famous Zenkō-ji. The region is also a hotspot for skiing and snowboarding, offering some of the country\'s best powder.',
        image:'images/timed-cards-2.jpg'
    },
    {
        place:'Sahara Desert - Morocco',
        title:'MARRAKECH',
        title2:'MEROUGA',
        description:'The journey from the vibrant souks and palaces of Marrakech to the tranquil, starlit sands of Merzouga showcases the diverse splendor of Morocco. Camel treks and desert camps offer an unforgettable immersion into the nomadic way of life.',
        image:'images/timed-cards-3.jpg'
    },
    {
        place:'Sierra Nevada - USA',
        title:'YOSEMITE',
        title2:'NATIONAL PARAK',
        description:'Yosemite National Park is a showcase of the American wilderness, revered for its towering granite monoliths, ancient giant sequoias, and thundering waterfalls. The park offers year-round recreational activities, from rock climbing to serene valley walks.',
        image:'images/timed-cards-4.jpg'
    },
    {
        place:'Tarifa - Spain',
        title:'LOS LANCES',
        title2:'BEACH',
        description:'Los Lances Beach in Tarifa is a coastal paradise known for its consistent winds, making it a world-renowned spot for kitesurfing and windsurfing. The beach\'s long, sandy shores provide ample space for relaxation and sunbathing, with a vibrant atmosphere of beach bars and cafes.',
        image:'images/timed-cards-5.jpg'
    },
    {
        place:'Cappadocia - Turkey',
        title:'Göreme',
        title2:'Valley',
        description:'Göreme Valley in Cappadocia is a historical marvel set against a unique geological backdrop, where centuries of wind and water have sculpted the landscape into whimsical formations. The valley is also famous for its open-air museums, underground cities, and the enchanting experience of hot air ballooning.',
        image:'images/timed-cards-6.jpg'
    },
    {
        place:'K2 - Pakistan',
        title:'K2',
        title2:'PEAK',
        description:'K2 is the world"s second highest mountain and perhaps the most coveted summit amongst climbers. It is located on the border of Pakistan and China and has been summited ten times less than Mount Everest.',
        image:'images/k2-mountain1.jpg'
    },
    {
        place:'Lahore - Pakistan',
        title:'Badshahi',
        title2:'Mosque',
        description:'The Badshahi Mosque in Lahore was commissioned by the sixth Mughal Emperor Aurangzeb. Constructed between 1671 and 1673, it was the largest mosque in the world upon construction. It is the second largest mosque in Pakistan and the fifth largest mosque in the world.',
        image:'images/badshahi-mosque2.jpg'
    },
    {
        place:'Karakoram Range - Pakistan',
        title:'Karakoram',
        title2:'Range',
        description:'At 8,611 m (28,251 ft) K2 is the tallest mountain in the region, and three others within 20 km top 8,000 m. The Karakoram and the Himalaya are important to Earth scientists for several reasons. They are one of the world"s most geologically active areas, at the boundary between two colliding continents.',
        image:'images/karakoram-range1.jpg'
    },
    {
        place:'Sindh - Pakistan',
        title:'Sukkur',
        title2:'Bridge',
        description:'The Lansdowne Bridge over the Indus at Sukkur was one of the great engineering feats of the 19th century. The longest cantilever bridge ever built, it had to support the load of heavy steam locomotives. The bridge was inaugurated on 25 March 1889. The Ayub Bridge was built immediately adjacent to the bridge in 1962, to separate the road and Railway traffic. Hence the photographs of the Landsdown Bridge usually also show the Ayub Bridge.',
        image:'images/bridge-pakistan1.jpg'
    },
    {
        place:'Nanga parbat - Pakistan',
        title:'Fairy Meadows',
        title2:'Nanga Parbat',
        description:'Fairy Meadows are idyllic alpine pastures surrounded by pine forest on the Northern slopes of Nanga Parbat. With breathtaking views of snow-clad mountains, the meadows are 19 kilometres from the Raikot bridge. About 10 kilometres from the Raikot bridge towards Gilgit visitors can see the massive bulk of Nanga Parbat.',
        image:'images/Fairy-Meadows-Nanga-Parbat.jpg'
    },
    {
        place:'Skardu - Pakistan',
        title:'Cold',
        title2:'Desert',
        description:'Skardu at dusk Sand dunes in the Cold Desert of Skardu are often covered in snow during winter. Skardu features a cold semi-arid climate (Köppen climate classification BSk). The climate of Skardu during the summer is moderated by its mountain setting; the intense heat of lowland Pakistan does not reach it.',
        image:'images/Cold-Desert1.jpg'
    },
    {
        place:'Sindh - Pakistan',
        title:'Gorakh Hill',
        title2:'Station',
        description:'Gorakh Hill station is situated on one of the highest plateaus of Sindh and it spreads over 10 square kilometers. The area where the Gorakh hill is situated is part of the Kirthar Mountain Range and it marks the border between Sindh and Baluchistan provinces of Pakistan. Gorakh Hill is well known for its nightlife.',
        image:'images/gorakh-hill-station1.jpg'
    },
    {
        place:'Gwadar - Pakistan',
        title:'Gwadar',
        title2:'Beach',
        description:'Gwadar is a port city on the southwestern coast of the Pakistani province of Balochistan. The city is located on the shores of the Arabian Sea, opposite Oman and has a population of over 90,000, according to the 2017 census. It was an overseas possession of Oman from 1783 to 1958. It is about 120 km (75 mi) southwest of Turbat. The sister port city of Chabahar in Iran"s Sistan and Baluchestan provinces is about 170 km (110 mi) to the west of Gwadar. On 2 April 2021, it was declared the capital of the south Balochistan region.',
        image:'images/Gwadar2.jpg'
    },
    {
        place:'Naran - Pakistan',
        title:'Saif-ul-Malook',
        title2:'Lake',
        description:'Saiful Muluk is the most beautiful lake in Kaghan Valley. Offering excellent view of the Peak of Malika Parbat Mountain this lake is a water source for River Kunhar, the river that is travelling along with us from the Mansehra district.',
        image:'images/Lake-Saif-ul-Malook2.jpg'
    },
    {
        place:'Kashmir - Pakistan',
        title:'Kashmir',
        title2:'Valley',
        description:'Kashmir is mostly mountainous. It is traversed mainly by the Western Himalayas. The Himalayas terminate in the western boundary of Kashmir at Nanga Parbat. Kashmir is traversed by three rivers namely Indus, Jehlum and Chenab.',
        image:'images/Kashmir2.jpg'
    },
    {
        place:'Gilgit Baltistan - Pakistan',
        title:'Hunza',
        title2:'Valley',
        description:'Hunza Valley is a valley of mountains located in the northern part of Gilgit Baltistan in Pakistan. It is formed by the Hunza River that borders Ishkoman on the Northwest and Shigar on the Southeast.',
        image:'images/trees-lake-blue-ocean-pak.jpg'
    },
  ]


const _ = (id)=>document.getElementById(id)
const cards = data.map((i, index)=>`<div class="card" id="card${index}" style="background-image:url(${i.image})"  ></div>`).join('')



const cardContents = data.map((i, index)=>`<div class="card-content" id="card-content-${index}">
<div class="content-start"></div>
<div class="content-place">${i.place}</div>
<div class="content-title-1">${i.title}</div>
<div class="content-title-2">${i.title2}</div>

</div>`).join('')


const sildeNumbers = data.map((_, index)=>`<div class="item" id="slide-item-${index}" >${index+1}</div>`).join('')
_('demo').innerHTML =  cards + cardContents
_('slide-numbers').innerHTML =  sildeNumbers


const range = (n) =>
  Array(n)
    .fill(0)
    .map((i, j) => i + j);
const set = gsap.set;

function getCard(index) {
  return `#card${index}`;
}
function getCardContent(index) {
  return `#card-content-${index}`;
}
function getSliderItem(index) {
  return `#slide-item-${index}`;
}

function animate(target, duration, properties) {
  return new Promise((resolve) => {
    gsap.to(target, {
      ...properties,
      duration: duration,
      onComplete: resolve,
    });
  });
}

let order = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
let detailsEven = true;

let offsetTop = 200;
let offsetLeft = 700;
let cardWidth = 200;
let cardHeight = 300;
let gap = 40;
let numberSize = 50;
const ease = "sine.inOut";

function init() {
  const [active, ...rest] = order;
  const detailsActive = detailsEven ? "#details-even" : "#details-odd";
  const detailsInactive = detailsEven ? "#details-odd" : "#details-even";
  const { innerHeight: height, innerWidth: width } = window;
  offsetTop = height - 430;
  offsetLeft = width - 830;

  gsap.set("#pagination", {
    top: offsetTop + 330,
    left: offsetLeft,
    y: 200,
    opacity: 0,
    zIndex: 60,
  });
  gsap.set("nav", { y: -200, opacity: 0 });

  gsap.set(getCard(active), {
    x: 0,
    y: 0,
    width: window.innerWidth,
    height: window.innerHeight,
  });
  gsap.set(getCardContent(active), { x: 0, y: 0, opacity: 0 });
  gsap.set(detailsActive, { opacity: 0, zIndex: 22, x: -200 });
  gsap.set(detailsInactive, { opacity: 0, zIndex: 12 });
  gsap.set(`${detailsInactive} .text`, { y: 100 });
  gsap.set(`${detailsInactive} .title-1`, { y: 100 });
  gsap.set(`${detailsInactive} .title-2`, { y: 100 });
  gsap.set(`${detailsInactive} .desc`, { y: 50 });
  gsap.set(`${detailsInactive} .cta`, { y: 60 });

  gsap.set(".progress-sub-foreground", {
    width: 500 * (1 / order.length) * (active + 1),
  });

  rest.forEach((i, index) => {
    gsap.set(getCard(i), {
      x: offsetLeft + 400 + index * (cardWidth + gap),
      y: offsetTop,
      width: cardWidth,
      height: cardHeight,
      zIndex: 30,
      borderRadius: 10,
    });
    gsap.set(getCardContent(i), {
      x: offsetLeft + 400 + index * (cardWidth + gap),
      zIndex: 40,
      y: offsetTop + cardHeight - 100,
    });
    gsap.set(getSliderItem(i), { x: (index + 1) * numberSize });
  });

  gsap.set(".indicator", { x: -window.innerWidth });

  const startDelay = 0.6;

  gsap.to(".cover", {
    x: width + 400,
    delay: 0.5,
    ease,
    onComplete: () => {
      setTimeout(() => {
        loop();
      }, 500);
    },
  });
  rest.forEach((i, index) => {
    gsap.to(getCard(i), {
      x: offsetLeft + index * (cardWidth + gap),
      zIndex: 30,
      delay: 0.05 * index,
      ease,
      delay: startDelay,
    });
    gsap.to(getCardContent(i), {
      x: offsetLeft + index * (cardWidth + gap),
      zIndex: 40,
      delay: 0.05 * index,
      ease,
      delay: startDelay,
    });
  });
  gsap.to("#pagination", { y: 0, opacity: 1, ease, delay: startDelay });
  gsap.to("nav", { y: 0, opacity: 1, ease, delay: startDelay });
  gsap.to(detailsActive, { opacity: 1, x: 0, ease, delay: startDelay });
}

let clicks = 0;

function step() {
  return new Promise((resolve) => {
    order.push(order.shift());
    detailsEven = !detailsEven;

    const detailsActive = detailsEven ? "#details-even" : "#details-odd";
    const detailsInactive = detailsEven ? "#details-odd" : "#details-even";

    document.querySelector(`${detailsActive} .place-box .text`).textContent =
      data[order[0]].place;
    document.querySelector(`${detailsActive} .title-1`).textContent =
      data[order[0]].title;
    document.querySelector(`${detailsActive} .title-2`).textContent =
      data[order[0]].title2;
    document.querySelector(`${detailsActive} .desc`).textContent =
      data[order[0]].description;

    gsap.set(detailsActive, { zIndex: 22 });
    gsap.to(detailsActive, { opacity: 1, delay: 0.4, ease });
    gsap.to(`${detailsActive} .text`, {
      y: 0,
      delay: 0.1,
      duration: 0.7,
      ease,
    });
    gsap.to(`${detailsActive} .title-1`, {
      y: 0,
      delay: 0.15,
      duration: 0.7,
      ease,
    });
    gsap.to(`${detailsActive} .title-2`, {
      y: 0,
      delay: 0.15,
      duration: 0.7,
      ease,
    });
    gsap.to(`${detailsActive} .desc`, {
      y: 0,
      delay: 0.3,
      duration: 0.4,
      ease,
    });
    gsap.to(`${detailsActive} .cta`, {
      y: 0,
      delay: 0.35,
      duration: 0.4,
      onComplete: resolve,
      ease,
    });
    gsap.set(detailsInactive, { zIndex: 12 });

    const [active, ...rest] = order;
    const prv = rest[rest.length - 1];

    gsap.set(getCard(prv), { zIndex: 10 });
    gsap.set(getCard(active), { zIndex: 20 });
    gsap.to(getCard(prv), { scale: 1.5, ease });

    gsap.to(getCardContent(active), {
      y: offsetTop + cardHeight - 10,
      opacity: 0,
      duration: 0.3,
      ease,
    });
    gsap.to(getSliderItem(active), { x: 0, ease });
    gsap.to(getSliderItem(prv), { x: -numberSize, ease });
    gsap.to(".progress-sub-foreground", {
      width: 500 * (1 / order.length) * (active + 1),
      ease,
    });

    gsap.to(getCard(active), {
      x: 0,
      y: 0,
      ease,
      width: window.innerWidth,
      height: window.innerHeight,
      borderRadius: 0,
      onComplete: () => {
        const xNew = offsetLeft + (rest.length - 1) * (cardWidth + gap);
        gsap.set(getCard(prv), {
          x: xNew,
          y: offsetTop,
          width: cardWidth,
          height: cardHeight,
          zIndex: 30,
          borderRadius: 10,
          scale: 1,
        });

        gsap.set(getCardContent(prv), {
          x: xNew,
          y: offsetTop + cardHeight - 100,
          opacity: 1,
          zIndex: 40,
        });
        gsap.set(getSliderItem(prv), { x: rest.length * numberSize });

        gsap.set(detailsInactive, { opacity: 0 });
        gsap.set(`${detailsInactive} .text`, { y: 100 });
        gsap.set(`${detailsInactive} .title-1`, { y: 100 });
        gsap.set(`${detailsInactive} .title-2`, { y: 100 });
        gsap.set(`${detailsInactive} .desc`, { y: 50 });
        gsap.set(`${detailsInactive} .cta`, { y: 60 });
        clicks -= 1;
        if (clicks > 0) {
          step();
        }
      },
    });

    rest.forEach((i, index) => {
      if (i !== prv) {
        const xNew = offsetLeft + index * (cardWidth + gap);
        gsap.set(getCard(i), { zIndex: 30 });
        gsap.to(getCard(i), {
          x: xNew,
          y: offsetTop,
          width: cardWidth,
          height: cardHeight,
          ease,
          delay: 0.1 * (index + 1),
        });

        gsap.to(getCardContent(i), {
          x: xNew,
          y: offsetTop + cardHeight - 100,
          opacity: 1,
          zIndex: 40,
          ease,
          delay: 0.1 * (index + 1),
        });
        gsap.to(getSliderItem(i), { x: (index + 1) * numberSize, ease });
      }
    });
  });
}

async function loop() {
  await animate(".indicator", 2, { x: 0 });
  await animate(".indicator", 0.8, { x: window.innerWidth, delay: 0.3 });
  set(".indicator", { x: -window.innerWidth });
  await step();
  loop();
}

async function loadImage(src) {
  return new Promise((resolve, reject) => {
    let img = new Image();
    img.onload = () => resolve(img);
    img.onerror = reject;
    img.src = src;
  });
}

async function loadImages() {
  const promises = data.map(({ image }) => loadImage(image));
  return Promise.all(promises);
}

async function start() {
  try {
    await loadImages();
    init();
  } catch (error) {
    console.error("One or more images failed to load", error);
  }
}

start()