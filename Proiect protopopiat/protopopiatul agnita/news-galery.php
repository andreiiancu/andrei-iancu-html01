<div class="news-carousel">

  <div class="progress-bar progress-bar--primary hide-on-desktop">
    <div class="progress-bar__fill"></div>
  </div>

<header class="main-post-wrapper">

  <div class="slides">
    <article class="main-post main-post--active">
      <div class="main-post__image">
        <img src="../protopopiatul agnita/assets/img/coves.jpg" alt="New McLaren wind tunnel 'critical' to future performance, says Tech Director Key" />
      </div>
      <div class="main-post__content">
        <div class="main-post__tag-wrapper">
          <span class="main-post__tag">Evenimente</span>

        </div>
        <h1 class="main-post__title">Tabara de vara, de la Coves</h1>
        <a class="main-post__link" href="../protopopiatul agnita/article-content.php">
              <span class="main-post__link-text">Află mai multe</span>
              <svg
                class="main-post__link-icon main-post__link-icon--arrow"
                width="37"
                height="12"
                viewBox="0 0 37 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11"
                  stroke="white"
                />
              </svg>
            </a>
      </div>
    </article>

      <div class="slides">
    <article class="main-post main-post--active">
      <div class="main-post__image">
        <img src="../protopopiatul agnita/assets/img/gh.jpg" alt="New McLaren wind tunnel 'critical' to future performance, says Tech Director Key" />
      </div>
      <div class="main-post__content">
        <div class="main-post__tag-wrapper">
          <span class="main-post__tag">Evenimente</span>

        </div>
        <h1 class="main-post__title">Tabara de vara, de la Coves</h1>
        <a class="main-post__link" href="../protopopiatul agnita/article-content.php">
              <span class="main-post__link-text">Află mai multe</span>
              <svg
                class="main-post__link-icon main-post__link-icon--arrow"
                width="37"
                height="12"
                viewBox="0 0 37 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11"
                  stroke="white"
                />
              </svg>
            </a>
      </div>
    </article>

      <div class="slides">
    <article class="main-post main-post--active">
      <div class="main-post__image">
        <img src="../protopopiatul agnita/assets/img/coves.jpg" alt="New McLaren wind tunnel 'critical' to future performance, says Tech Director Key" />
      </div>
      <div class="main-post__content">
        <div class="main-post__tag-wrapper">
          <span class="main-post__tag">Evenimente</span>

        </div>
        <h1 class="main-post__title">Tabara de vara, de la Coves</h1>
        <a class="main-post__link" href="../protopopiatul agnita/article-content.php">
              <span class="main-post__link-text">Află mai multe</span>
              <svg
                class="main-post__link-icon main-post__link-icon--arrow"
                width="37"
                height="12"
                viewBox="0 0 37 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11"
                  stroke="white"
                />
              </svg>
            </a>
      </div>
    </article>



  </div>
</header>

<div class="posts-wrapper hide-on-mobile">
  <article class="post post--active">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <header class="post__header">
      <span class="post__tag">Evenimente</span>
      <p class="post__published">16 August 2019</p>
    </header>
    <h2 class="post__title">Tabara de vara, de la Coves</h2>
  </article>

    <article class="post post--active">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <header class="post__header">
      <span class="post__tag">Evenimente</span>
      <p class="post__published">16 August 2019</p>
    </header>
    <h2 class="post__title">Tabara de vara, de la Coves</h2>
  </article>

    <article class="post post--active">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <header class="post__header">
      <span class="post__tag">Evenimente</span>
      <p class="post__published">16 August 2019</p>
    </header>
    <h2 class="post__title">Tabara de vara, de la Coves</h2>
  </article>

</div>
</div>

<style>
 @import url("https://fonts.googleapis.com/css?family=Titillium+Web:400,700&display=swap");
*,
*::before,
*::after {
  box-sizing: border-box;
}



.news-carousel {
  min-height: 100vh;
  display: grid;
  grid-template-rows: 1fr 3fr 1.5fr;
  grid-template-columns: 50px 1fr 1fr 1fr 1fr 50px;
  row-gap: 2vh;
  position: relative;
}

.progress-bar {
  position: absolute;
  top: 0;
  left: 0;
  height: 5px;
  width: 100%;
}
.progress-bar__fill {
  width: 0;
  height: inherit;
  background: #c20000;
  transition: all 0.16s;
}
.progress-bar--primary {
  z-index: 2;
}

.main-post-wrapper {
  grid-row: 1/4;
  grid-column: 1/7;
  position: relative;
}

.slides {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
}

.main-post {
  position: absolute;
  top: 100%;
  right: 0;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 100%;
}
.main-post__image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  bottom: 0;
}
.main-post__image img {
  width: 100%;
  height: 100%;
  display: block;
  -o-object-fit: cover;
     object-fit: cover;
}
.main-post__image::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: transparent ;rgba(0, 0, 255, 0.158)
}
.main-post__content {
  position: absolute;
  top: 40%;
  left: 4%;
  transform: translateY(-40%);
  color: #fff;
  width: 90%;
}
.main-post__tag-wrapper {
  margin: 0;
  display: inline-flex;
  overflow: hidden;
}
.main-post__tag {
  font-size: 0.95em;
  background: #c20000;
  padding: 6px 18px;
}
.main-post__title {
  font-weight: 700;
  font-size: 1.95em;
  line-height: 1.25;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
}
.main-post__link {
  text-decoration: none;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  display: inline-flex;
  align-items: center;
}
.main-post__link-text {
  font-size: 0.9em;
}
.main-post__link-icon--arrow {
  margin-left: 12px;
}
.main-post__link-icon--play-btn {
  margin-right: 12px;
}

.main-post__link:hover .main-post__link-text,
.main-post__link:hover .main-post__link-icon--arrow path {
  color: #c20000;
  stroke: #c20000;
}

.main-post--active {
  top: 0;
  z-index: 1;
  transition: top 0.9s 0.4s ease-out;
}

.main-post--not-active {
  top: 100%;
  z-index: 0;
  transition: top 0.75s 2s;
}

.main-post.main-post--active .main-post__tag-wrapper {
  width: 25%;
  transition: all 0.98s 1.9s;
}

.main-post.main-post--not-active .main-post__tag-wrapper {
  width: 0;
  transition: width 0.3s 0.2s;
}

.main-post.main-post--active .main-post__title {
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.8s 1.42s, transform 0.5s 1.4s;
}

.main-post.main-post--not-active .main-post__title {
  transform: translateY(40px);
  opacity: 0;
  transition: transform 0.2s 0.35s, opacity 0.5s 0.2s;
}

.main-post.main-post--active .main-post__link {
  opacity: 1;
  transition: opacity 0.9s 2.2s;
}

.main-post.main-post--not-active .main-post__link {
  opacity: 0;
  transition: opacity 0.5s 0.2s;
}

.posts-wrapper {
  grid-row: 3/4;
  grid-column: 3/6;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  -moz-column-gap: 14px;
       column-gap: 14px;
  z-index: 1;
}

.post {
  background: rgba(14, 13, 14, 0.6);
  opacity: 0.3;
  color: #fff;
  position: relative;
  padding: 16px 20px;
}
.post__header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 0.8em;
}
.post__tag {
  color: #80837e;
}
.post__title {
  font-weight: 400;
  font-size: 0.95em;
  line-height: 1.5;
}
.post--active {
  opacity: 1;
  background: rgba(255, 0, 0, 0.295);rgba(14, 13, 14, 0.75)
}
.post:not(.post--active) {
  pointer-events: none;
}

.hide-on-mobile {
  display: none;
}

@media screen and (min-width: 768px) {
  .main-post__title {
    font-size: 2.9em;
  }
}
@media screen and (min-width: 1024px) {
  .hide-on-mobile {
    display: grid;
  }

  .posts-wrapper {
    grid-column: 2/6;
  }

  .hide-on-desktop {
    display: none;
  }
}
@media screen and (min-width: 1440px) {
  .main-post__content {
    width: 45%;
  }

  .posts-wrapper {
    grid-column: 3/6;
  }
}

</style>

<script>
  let mainPosts = document.querySelectorAll(".main-post");
let posts = document.querySelectorAll(".post");

let i = 0;
let postIndex = 0;
let currentPost = posts[postIndex];
let currentMainPost = mainPosts[postIndex];

let progressInterval = setInterval(progress, 50); // 180

function progress() {
  if (i === 100) {
    i = -5;
    // reset progress bar
    currentPost.querySelector(".progress-bar__fill").style.width = 0;
    document.querySelector(
      ".progress-bar--primary .progress-bar__fill"
    ).style.width = 0;
    currentPost.classList.remove("post--active");

    postIndex++;

    currentMainPost.classList.add("main-post--not-active");
    currentMainPost.classList.remove("main-post--active");

    // reset postIndex to loop over the slides again
    if (postIndex === posts.length) {
      postIndex = 0;
    }

    currentPost = posts[postIndex];
    currentMainPost = mainPosts[postIndex];
  } else {
    i++;
    currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
    document.querySelector(
      ".progress-bar--primary .progress-bar__fill"
    ).style.width = `${i}%`;
    currentPost.classList.add("post--active");

    currentMainPost.classList.add("main-post--active");
    currentMainPost.classList.remove("main-post--not-active");
  }
}
</script>
