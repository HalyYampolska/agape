<?php 
custom_get_header(); ?>

<!-- [*] Hero start -->
<section class="hero">
  <div class="hero__wrapper">
    <div class="hero__container">
      <div class="hero__subtitle">Реабілітаційний комплекс</div>
      <div class="hero__title">Агапе</div>
      <div class="hero__description">
        Інтегрована підтримка для покращення якості життя людей з обмеженими
        можливостями
      </div>
    </div>
    <div class="hero__image-wrapper">
      <img
        class="hero__image"
        src="./assets/img/hero-image2.webp"
        alt="Реабілітаційний комплекс Агапе"
      />
    </div>
  </div>
</section>
<!-- [*] Hero finish -->

    <!-- [*] Counters start -->
<section class="counters">
  <ul class="counters__list">
    <li class="counters__item">
      <p class="counters__number">300+</p>
      <div class="counters__text">
        <p>років досвіду</p>
      </div>
    </li>
    <li class="counters__item">
      <p class="counters__number">300+</p>
      <div class="counters__text">
        <p>людей отримали фізичну реабілітацію</p>
      </div>
    </li>
    <li class="counters__item">
      <p class="counters__number">300+</p>
      <div class="counters__text">
        <p>надано та відновлено інвалідних візків</p>
      </div>
    </li>
    <li class="counters__item">
      <p class="counters__number">300+</p>
      <div class="counters__text">
        <p>підготовлено спеціалістів з фізичної терапії</p>
      </div>
    </li>
  </ul>
</section>
<!-- [*] Counters finish] -->

    <!-- [*] Main services homepage start -->
<section class="main">
  <div class="main__wrapper">
    <div class="main__container">
      <div class="main__box">
        <div class="main__box-wrapper main__box--left">
          <div class="main__text main__text--left">
            <h2 class="main__text-title">Реабілітація</h2>
            <p class="main__text-p">
              Допомога у відновленні рухових функцій та покращенні якості життя
              людей з обмеженими можливостями, сприяння їхній незалежності та
              самостійності. Проживання з підтримкою, яке створює комфортне
              середовище для інвалідів, що потребують тимчасового або постійного
              проживання.
            </p>
            <a href="#" class="button button--secondary button--with-icon"
              >Детальніше</a
            >
          </div>
          <div class="main__image-wrapper">
            <img
              src="<?php echo get_theme_file_uri( './assets/img/img1.png' ); ?>"
              alt="rehabilitation"
              class="main__image"
            />
          </div>
        </div>
      </div>

      <div class="main__box">
        <div class="main__box-wrapper main__box--right">
          <div class="main__text main__text--right">
            <h2 class="main__text-title">Соціальні активності</h2>
            <p class="main__text-p">
              Підтримка та інтеграція людей з обмеженими можливостями в
              суспільство через зустрічі, соціальні заходи та навчальні групи.
              Організація таборів для реабілітації, спільних святкових заходів.
              Працює творча студія, яка сприяє розкриттю творчого потенціалу.
            </p>
            <a href="#" class="button button--secondary button--with-icon"
              >Детальніше</a
            >
          </div>
          <div class="main__image-intersect-adaptive">
            <img
              src="data:image/svg+xml,%3csvg%20width='768'%20height='126'%20viewBox='0%200%20768%20126'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M246.746%2063H768V0C600.76%2040.6066%20426.23%2062.3906%20246.746%2063Z'%20fill='white'/%3e%3cpath%20d='M0%2050.3746V63H231.254C153.168%2062.7349%2076.0188%2058.4618%200%2050.3746Z'%20fill='white'/%3e%3cpath%20d='M521.254%2063H0V126C167.24%2085.3934%20341.77%2063.6094%20521.254%2063Z'%20fill='white'/%3e%3cpath%20d='M768%2075.6254V63H536.746C614.832%2063.2651%20691.981%2067.5381%20768%2075.6254Z'%20fill='white'/%3e%3c/svg%3e)"
              alt=""
              class="main__image-intersect-image-adaptation"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main__image-intersect">
    <img
      src="data:image/svg+xml,%3csvg%20width='1440'%20height='72'%20viewBox='0%200%201440%2072'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M1440%2072.0133V0C1207.36%2047.2233%20966.575%2072.013%20720%2072.013C473.425%2072.013%20232.639%2047.2233%200%200V72.013H720L1440%2072.0133Z'%20fill='white'/%3e%3c/svg%3e"
      alt=""
      class="main__image-intersect-image"
    />
  </div>
</section>
<!-- [*] Main services homepage finish -->

    <!-- [*] About us start -->
<section class="about">
  <div class="about__wrapper">
    <div class="about__gallery">
      <div class="about__media">
        <img
          class="about__img"
          src="<?php echo get_theme_file_uri( './assets/img/about-block-image-1.png' ); ?>"
          alt=""
        />
      </div>

      <div class="about__media">
        <img
          class="about__img"
          src="<?php echo get_theme_file_uri( './assets/img/about-block-image-3.png' ); ?>"
          alt=""
        />
      </div>

      <div class="about__media">
        <video
          autoplay
          muted
          class="about__video"
          src="<?php echo get_theme_file_uri( './assets/video/about_agape_video.mp4' ); ?>"
          type="video/mp4"
        ></video>
      </div>
      <div class="about__media">
        <img
          class="about__img"
          src="<?php echo get_theme_file_uri( './assets/img/about-block-image-5.png' ); ?>"
          alt=""
        />
      </div>
      <div class="about__media">
        <img
          class="about__img"
          src="<?php echo get_theme_file_uri( './assets/img/about-block-image-6.png' ); ?>"
          alt=""
        />
      </div>
      <div class="about__media">
        <img
          class="about__img"
          src="<?php echo get_theme_file_uri( './assets/img/about-block-image-7.png' ); ?>"
          alt=""
        />
      </div>
      <div class="about__media">
        <img
          class="about__img"
          src="<?php echo get_theme_file_uri( './assets/img/about-block-image-8.png' ); ?>"
          alt=""
        />
      </div>
      <div class="about__media">
        <img
          class="about__img"
          src="<?php echo get_theme_file_uri( './assets/img/about-block-image-9.png' ); ?>"
          alt=""
        />
      </div>
    </div>
    <div class="about__text">
      <div class="about__container">
        <h2 class="about__title">Про нас</h2>
        <div class="about__content">
          <p class="about__description">
            «Агапе Україна» - неприбуткова громадська організація, яка створена
            для роботи з людьми з інвалідністю. Діяльність організації базується
            на християнських цінностях і здійснюється командою самовідданих,
            посвячених людей, що практично піклуються про людей з інвалідністю
            та їх потреби.
          </p>
          <p class="about__description">
            Наше бачення - відкривати нові можливості для людей з інвалідністю
            та проголошувати біблійний погляд на інвалідність в суспільстві.
          </p>
          <p class="about__description">
            Наша місія - практично сприяти фізичному, соціальному та духовному
            розвитку людей з інвалідністю. Ділитися досвідом та ресурсами для
            заохочення інших до служіння людям з інвалідністю.
          </p>
        </div>
        <div class="about__button">
          <a href="#" class="about__link button button--tertiary"
            >Перейти до розділу
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- [*] About us finish] -->

    <!-- [*] Partners start -->
<section class="partners">
  <div class="partners__wrapper splide">
    <h2 class="partners__title">Наші друзі</h2>
    <div class="splide__track">
      <ul class="parthers__list splide__list">
        <li class="partners__item splide__slide">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAACQCAYAAADnRuK4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAi6SURBVHgB7dpLbBNJGgfwqnbCO+CREA8JlM4iAQIGnCwIDkjjcIHbBsQB8YqzXJFCOCGENg7iAgcmkUCc2JjHgdsknDgt5rbSAuvM3pDQGIkLJzyBFY/grvl/nWrTGDuxp5sMM/P/SZ1ud1dXOd1f16utFBEREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREdFX5tq1a66iPyytYpZKpZLv37/vX7JkSc/27dtTW7ZsMbacgjFGluzJkyefNZLX4cOHU4lE4vsZkpRu3bq1X/3O4ZIlTaL8Q41DJc+o8YSXGCsUSiXZsWX7knTC6MF6af/3+FWuOm+vxRvUnurxd2iFfExBl6eGCoW3RRVRrAG0c+fO/qmpqSwCSILIYNELFy5Ue/fuLbmum0QSCSaFIBoaGBgYmi2/o0ePph3HuY/NIs4pho9prVNYlW7evNmhfudwk12T8H6aIUlRl51OCaJvu9oyjtaj9RIao7I/Pp4cCuUr18+dKU8VgaNisnv37kHc1GFsLrO7/OAslUoGtUTy4cOHfkAhwBTW2UuXLo02kf0N5NEdXiRr9efheo53qpGEWqtsCrWUbCN4pKZyKwfNJ9es4TxnEksA7dmzJ4OaIms/SuAY4X+Ypu7evaufP3+u3r17J0EkwZS5cOFC5H/gj2ji0aSWBRdwJNiHS9j7eUqT163vO7RT7lShB8rznJTdTIXOH5h4PPnN7Hk2J3IA7du3z0WASKSbYN+aNWtUV1fXA2zu9zyvG7G0H8vYvXv3pPYJL4NnzpxxFdXklJ3h0Ee3VprCv98WC//5P/qW6kaNtJUAUh+cfKN5NqNFRZdGALlYm6VLl6ru7m6zatWq8319fdmqdGOofbJPnz4dXLt2bdD3kn5RBktWRST9JXyPXgTqOGrDbVi72F1CbTdy586dYpDu0KFD7rx58yRdyh4fCh8/duxYuGmVp3oCTWYuXBbSZLD6ruorSId+IFxOa2trv5q+icXqchrUTDNdSau1WVZ9UOu3L9UXELkGkpuGldm4caM6cuSIam9vf1AjeHzS93nx4kXedrCV9IfK5XLkatR+D6kJpSmVAMhgWwLqFG5iJSBs8Ein8pRN34PP/5X9oXzkXBmx+MexjCJg7leVlbbp0qHtnupyZH+QZ3U5jZlyG02JoNkWbBujGxrlxiGOAEpJzYORlm5razO4UGMzpd+0adOwdKYlgFAjqZaWlnYVI3yfMRmZ2dHZDbnBJ06c8MvAd5M+l4sg68TxTjSvMgWQtPs/yUM66uE8MplMsrqsoBzUZvnw/nA5ko8047XKqWdjaoEri+ckwg9X4bOERrvfptoyW7uWogvxMYAdx8urORJHACUPHjyo58+fb/C0a8zbTMyU/s2bN6WgD4TaR+Echc50bEGEPMeDbdw4P5hRltxAXFhnTIIml8sV5fPt27fz9n9YVi+/IDjwf9VNU626HDwkhdnKCZufmPeTLOjkVgJOf9rHsTsRpAk9KiOv0N5C4eHrvJojkftAmCh8uXz58iQutN+vmZyclKo0Xy89mq1g3sbgPH+Udu7cuTir3FKdbYUbmlfN8/s6CMyfGz2hRjlJFYnJFx6/Gm4gXU6XEwNqDkUOoB07dkygFpF+gIzcNWoYqUpH6qVHAPXKsF6aPTyZ/gy1mkNBZ3umNPg/0rYzLf2gNNZDCIpS6Hg79pcaLQfBl5T/uXEm5/9V+mdHgufRq7Ha31M/cJSXMx8nFt2oE4PNityEYcQ1jrZdmiK/GUNgpHft2lVrql0dOHBgEFX7d+grqQULFvhXVEZNao7I6MnObLuzJE1WpTE10pRiKKemiUev+mT58dHkqXrBI7TG7DVec3z8LlreJEWs7ZoTuQZavHhxDk/YPxAI3+Cj7ujoMBs2bBjEK4wMAmoItUwRAZbC8jdsp7HfYO2fi6fyJS50Ts0RlCfD6qKdyfYdP348UyOddMT77HFpOrLoiOeuX7/+zB5PyXu9WcopBOWgA+7iwelRX4DUONv+2obv4teUybJTlnJyao5EroE6OztLCI4+qX1kwbbGBZN3YC4u8j9xMf+F5TICJS2Bo6fbOv9cXNShbDZbVPGa6QlMofh88KHWyKoavqOfHiNGme1VdiguTdLELOWEA+yLNitoyiq1uBOeXTa6WNl0Wv3vjwBLh06N3H2I5VXG1q1bxzFKOR80Y6tXrzanT582ixYt0rZz7QeNsdR0k5C9ePHiiIoZAjUVbNsJThV6EVtCQLjB8Q8fPqRmy09GmcG58kf6e7IORnh1NF1OFI4XrsV1OmjGcMUrgYX+1A+oqe7jRWzo1w0mcgDFMRPt27x5c/bJkydFBJK8VG1HU6bPnj2rrly5Yl6/fu33d6QjKZ1P3NDzly9fbmBU8av0o9mRoCnZVyzFYLiupud0+nt7e7/HDX5mm5rPyCw18siq6UCXoXRRhuLSt7F5SqCmkSZtT3GxJOUc7B9G3g2VExfbjOVtM6bwkjSD1TACaxgvVKVGsg/B9PHpf1KVtDc16y8iZhPb23ixfv363Lp16zpwwf6OJzW/YsWKIuZ4NOaJiitXrswjyXnMyfzl6tWrDQUPLr489fJTjs+aAKlVqn/iYffnsJKRnv+k4YZWfi9kX/jeQBqZiR7EesTmHx6iS55yweXCZ6SvI3nYUVhwM4p2O1gCgzJfJEEk/aigHCmzRjlVXxx5BssMEvJ7HpsOj2MlP3+eyO537Kw0Asv/yYZMA1QVltdeufur+z3Qb8nWDqO4SX3V765iLMN/pRHuhFeXjwfHDTrbXxtp2uIe5sdaA9HX7UvMETGAKJLYOtF/BrWartCxnJrD+RciIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiJq1i+nk8BoTtAnrwAAAABJRU5ErkJggg==" alt="" />
        </li>
        <li class="partners__item splide__slide">
          <img src="data:image/png;base64,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" alt="" />
        </li>
        <li class="partners__item splide__slide">
          <img src="data:image/png;base64,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" alt="" />
        </li>
        <li class="partners__item splide__slide">
          <img src="./assets/img/friend-logo-4.png" alt="" />
        </li>
        <li class="partners__item splide__slide">
          <img src="data:image/png;base64,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" alt="" />
        </li>
        <li class="partners__item splide__slide">
          <img src="data:image/png;base64,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" alt="" />
        </li>
        <li class="partners__item splide__slide">
          <img src="./assets/img/friend-logo-7.png" alt="" />
        </li>
        <li class="partners__item splide__slide">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAACQCAYAAADnRuK4AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAi6SURBVHgB7dpLbBNJGgfwqnbCO+CREA8JlM4iAQIGnCwIDkjjcIHbBsQB8YqzXJFCOCGENg7iAgcmkUCc2JjHgdsknDgt5rbSAuvM3pDQGIkLJzyBFY/grvl/nWrTGDuxp5sMM/P/SZ1ud1dXOd1f16utFBEREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREREdFX5tq1a66iPyytYpZKpZLv37/vX7JkSc/27dtTW7ZsMbacgjFGluzJkyefNZLX4cOHU4lE4vsZkpRu3bq1X/3O4ZIlTaL8Q41DJc+o8YSXGCsUSiXZsWX7knTC6MF6af/3+FWuOm+vxRvUnurxd2iFfExBl6eGCoW3RRVRrAG0c+fO/qmpqSwCSILIYNELFy5Ue/fuLbmum0QSCSaFIBoaGBgYmi2/o0ePph3HuY/NIs4pho9prVNYlW7evNmhfudwk12T8H6aIUlRl51OCaJvu9oyjtaj9RIao7I/Pp4cCuUr18+dKU8VgaNisnv37kHc1GFsLrO7/OAslUoGtUTy4cOHfkAhwBTW2UuXLo02kf0N5NEdXiRr9efheo53qpGEWqtsCrWUbCN4pKZyKwfNJ9es4TxnEksA7dmzJ4OaIms/SuAY4X+Ypu7evaufP3+u3r17J0EkwZS5cOFC5H/gj2ji0aSWBRdwJNiHS9j7eUqT163vO7RT7lShB8rznJTdTIXOH5h4PPnN7Hk2J3IA7du3z0WASKSbYN+aNWtUV1fXA2zu9zyvG7G0H8vYvXv3pPYJL4NnzpxxFdXklJ3h0Ee3VprCv98WC//5P/qW6kaNtJUAUh+cfKN5NqNFRZdGALlYm6VLl6ru7m6zatWq8319fdmqdGOofbJPnz4dXLt2bdD3kn5RBktWRST9JXyPXgTqOGrDbVi72F1CbTdy586dYpDu0KFD7rx58yRdyh4fCh8/duxYuGmVp3oCTWYuXBbSZLD6ruorSId+IFxOa2trv5q+icXqchrUTDNdSau1WVZ9UOu3L9UXELkGkpuGldm4caM6cuSIam9vf1AjeHzS93nx4kXedrCV9IfK5XLkatR+D6kJpSmVAMhgWwLqFG5iJSBs8Ein8pRN34PP/5X9oXzkXBmx+MexjCJg7leVlbbp0qHtnupyZH+QZ3U5jZlyG02JoNkWbBujGxrlxiGOAEpJzYORlm5razO4UGMzpd+0adOwdKYlgFAjqZaWlnYVI3yfMRmZ2dHZDbnBJ06c8MvAd5M+l4sg68TxTjSvMgWQtPs/yUM66uE8MplMsrqsoBzUZvnw/nA5ko8047XKqWdjaoEri+ckwg9X4bOERrvfptoyW7uWogvxMYAdx8urORJHACUPHjyo58+fb/C0a8zbTMyU/s2bN6WgD4TaR+Echc50bEGEPMeDbdw4P5hRltxAXFhnTIIml8sV5fPt27fz9n9YVi+/IDjwf9VNU626HDwkhdnKCZufmPeTLOjkVgJOf9rHsTsRpAk9KiOv0N5C4eHrvJojkftAmCh8uXz58iQutN+vmZyclKo0Xy89mq1g3sbgPH+Udu7cuTir3FKdbYUbmlfN8/s6CMyfGz2hRjlJFYnJFx6/Gm4gXU6XEwNqDkUOoB07dkygFpF+gIzcNWoYqUpH6qVHAPXKsF6aPTyZ/gy1mkNBZ3umNPg/0rYzLf2gNNZDCIpS6Hg79pcaLQfBl5T/uXEm5/9V+mdHgufRq7Ha31M/cJSXMx8nFt2oE4PNityEYcQ1jrZdmiK/GUNgpHft2lVrql0dOHBgEFX7d+grqQULFvhXVEZNao7I6MnObLuzJE1WpTE10pRiKKemiUev+mT58dHkqXrBI7TG7DVec3z8LlreJEWs7ZoTuQZavHhxDk/YPxAI3+Cj7ujoMBs2bBjEK4wMAmoItUwRAZbC8jdsp7HfYO2fi6fyJS50Ts0RlCfD6qKdyfYdP348UyOddMT77HFpOrLoiOeuX7/+zB5PyXu9WcopBOWgA+7iwelRX4DUONv+2obv4teUybJTlnJyao5EroE6OztLCI4+qX1kwbbGBZN3YC4u8j9xMf+F5TICJS2Bo6fbOv9cXNShbDZbVPGa6QlMofh88KHWyKoavqOfHiNGme1VdiguTdLELOWEA+yLNitoyiq1uBOeXTa6WNl0Wv3vjwBLh06N3H2I5VXG1q1bxzFKOR80Y6tXrzanT582ixYt0rZz7QeNsdR0k5C9ePHiiIoZAjUVbNsJThV6EVtCQLjB8Q8fPqRmy09GmcG58kf6e7IORnh1NF1OFI4XrsV1OmjGcMUrgYX+1A+oqe7jRWzo1w0mcgDFMRPt27x5c/bJkydFBJK8VG1HU6bPnj2rrly5Yl6/fu33d6QjKZ1P3NDzly9fbmBU8av0o9mRoCnZVyzFYLiupud0+nt7e7/HDX5mm5rPyCw18siq6UCXoXRRhuLSt7F5SqCmkSZtT3GxJOUc7B9G3g2VExfbjOVtM6bwkjSD1TACaxgvVKVGsg/B9PHpf1KVtDc16y8iZhPb23ixfv363Lp16zpwwf6OJzW/YsWKIuZ4NOaJiitXrswjyXnMyfzl6tWrDQUPLr489fJTjs+aAKlVqn/iYffnsJKRnv+k4YZWfi9kX/jeQBqZiR7EesTmHx6iS55yweXCZ6SvI3nYUVhwM4p2O1gCgzJfJEEk/aigHCmzRjlVXxx5BssMEvJ7HpsOj2MlP3+eyO537Kw0Asv/yYZMA1QVltdeufur+z3Qb8nWDqO4SX3V765iLMN/pRHuhFeXjwfHDTrbXxtp2uIe5sdaA9HX7UvMETGAKJLYOtF/BrWartCxnJrD+RciIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiJq1i+nk8BoTtAnrwAAAABJRU5ErkJggg==" alt="" />
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- [*] Partnesr finish -->

    <!-- [*] Reviews start -->
<section class="reviews">
  <h2 class="reviews__title">Відгуки</h2>
  <div class="reviews__slider splide" id="image-slider">
    <div class="reviews__slider-track splide__track">
      <ul class="reviews__slider-list splide__list">
        <li class="reviews__slider-item splide__slide">
          <div class="reviews__slider-item-contain">
            <div class="reviews__slider-video">
              <div class="reviews__slider-video-block-item">
                <img src="./assets/img/image%20143.png" alt="" />
              </div>
              <div class="reviews__slider-text">
                <p class="reviews__slider-text-p">Денис</p>
                <p class="reviews__slider-text-c">
                  Мінно-вибухова травма хребта у лютому 2023 р
                </p>
                <a href="#" class="reviews__slider-img"
                  ><img
                    src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M0%2012.0672C0%2018.0342%204.333%2022.9942%2010%2024.0002V15.3332H7V12.0002H10V9.33324C10%206.33324%2011.933%204.66724%2014.667%204.66724C15.533%204.66724%2016.467%204.80024%2017.333%204.93324V8.00024H15.8C14.333%208.00024%2014%208.73324%2014%209.66724V12.0002H17.2L16.667%2015.3332H14V24.0002C19.667%2022.9942%2024%2018.0342%2024%2012.0672C24%205.43024%2018.6%200.000244141%2012%200.000244141C5.4%200.000244141%200%205.43024%200%2012.0672Z'%20fill='%23B6BAC7'/%3e%3c/svg%3e"
                    alt=""
                    class="reviews__slider-image"
                /></a>
              </div>
            </div>
            <div class="reviews__slider-item-text-p">
              <p>
                Я до реабілітації навіть не міг сам пересідати з ліжка на візок,
                з візка на ліжко. Зараз можу це робити абсолютно сам. Ще на
                туалет навчили сідати, в машину. Тож я вже практично
                самостійний. І це все — заслуги цього центру, цих чудових людей
                — реабілітологів.Після травми потрапив в Чехію на реабілітацію.
                Там фахівці зробили ряд обстежень,та прооперували –
                стабілізували хребет. Після Чехії  потрапив до Львова, а далі
                Денису порадили їхати в чудовий центр “Агапе”.Сказали, що там
                чудові фахівці.
              </p>
            </div>
          </div>
        </li>
        <li class="reviews__slider-item splide__slide">
          <div class="reviews__slider-item-contain">
            <div class="reviews__slider-video">
              <div class="reviews__slider-video-block-item">
                <img src="./assets/img/image%20143.png" alt="" />
              </div>
              <div class="reviews__slider-text">
                <p class="reviews__slider-text-p">Денис</p>
                <p class="reviews__slider-text-c">Травма хребта 2023 р</p>
                <a href="#" class="reviews__slider-img"
                  ><img
                    src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M0%2012.0672C0%2018.0342%204.333%2022.9942%2010%2024.0002V15.3332H7V12.0002H10V9.33324C10%206.33324%2011.933%204.66724%2014.667%204.66724C15.533%204.66724%2016.467%204.80024%2017.333%204.93324V8.00024H15.8C14.333%208.00024%2014%208.73324%2014%209.66724V12.0002H17.2L16.667%2015.3332H14V24.0002C19.667%2022.9942%2024%2018.0342%2024%2012.0672C24%205.43024%2018.6%200.000244141%2012%200.000244141C5.4%200.000244141%200%205.43024%200%2012.0672Z'%20fill='%23B6BAC7'/%3e%3c/svg%3e"
                    alt=""
                    class="reviews__slider-image"
                /></a>
              </div>
            </div>
            <div class="reviews__slider-item--text">
              <p>
                Я до реабілітації навіть не міг сам пересідати з ліжка на візок,
                з візка на ліжко. Зараз можу це робити абсолютно сам. Ще на
                туалет навчили сідати, в машину. Тож я вже практично
                самостійний.
              </p>
            </div>
          </div>
        </li>
        <li class="reviews__slider-item splide__slide">
          <div class="reviews__slider-item-contain">
            <div class="reviews__slider-video">
              <div class="reviews__slider-video-block-item">
                <img src="./assets/img/image%20143.png" alt="" />
              </div>
              <div class="reviews__slider-text">
                <p class="reviews__slider-text-p">Денис</p>
                <p class="reviews__slider-text-c">
                  Мінно-вибухова травма хребта у лютому 2023 р
                </p>
                <a href="#" class="reviews__slider-img"
                  ><img
                    src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M0%2012.0672C0%2018.0342%204.333%2022.9942%2010%2024.0002V15.3332H7V12.0002H10V9.33324C10%206.33324%2011.933%204.66724%2014.667%204.66724C15.533%204.66724%2016.467%204.80024%2017.333%204.93324V8.00024H15.8C14.333%208.00024%2014%208.73324%2014%209.66724V12.0002H17.2L16.667%2015.3332H14V24.0002C19.667%2022.9942%2024%2018.0342%2024%2012.0672C24%205.43024%2018.6%200.000244141%2012%200.000244141C5.4%200.000244141%200%205.43024%200%2012.0672Z'%20fill='%23B6BAC7'/%3e%3c/svg%3e"
                    alt=""
                    class="reviews__slider-image"
                /></a>
              </div>
            </div>
            <div class="reviews__slider-item--text">
              <p>
                Я до реабілітації навіть не міг сам пересідати з ліжка на візок,
                з візка на ліжко. Зараз можу це робити абсолютно сам. Ще на
                туалет навчили сідати, в машину. Тож я вже практично
                самостійний. І це все — заслуги цього центру, цих чудових людей
                — реабілітологів.Після травми потрапив в Чехію на реабілітацію.
                Там фахівці зробили ряд обстежень,та прооперували –
                стабілізували хребет. Після Чехії  потрапив до Львова, а далі
                Денису порадили їхати в чудовий центр “Агапе”.Сказали, що там
                чудові фахівці.
              </p>
            </div>
          </div>
        </li>
        <li class="reviews__slider-item splide__slide">
          <div class="reviews__slider-item-contain">
            <div class="reviews__slider-video">
              <div class="reviews__slider-video-block-item">
                <img src="./assets/img/image%20143.png" alt="" />
              </div>
              <div class="reviews__slider-text">
                <p class="reviews__slider-text-p">Денис</p>
                <p class="reviews__slider-text-c">Травма хребта 2023 р</p>
                <a href="#" class="reviews__slider-img"
                  ><img
                    src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M0%2012.0672C0%2018.0342%204.333%2022.9942%2010%2024.0002V15.3332H7V12.0002H10V9.33324C10%206.33324%2011.933%204.66724%2014.667%204.66724C15.533%204.66724%2016.467%204.80024%2017.333%204.93324V8.00024H15.8C14.333%208.00024%2014%208.73324%2014%209.66724V12.0002H17.2L16.667%2015.3332H14V24.0002C19.667%2022.9942%2024%2018.0342%2024%2012.0672C24%205.43024%2018.6%200.000244141%2012%200.000244141C5.4%200.000244141%200%205.43024%200%2012.0672Z'%20fill='%23B6BAC7'/%3e%3c/svg%3e"
                    alt=""
                    class="reviews__slider-image"
                /></a>
              </div>
            </div>
            <div class="reviews__slider-item--text">
              <p>
                Я до реабілітації навіть не міг сам пересідати з ліжка на візок,
                з візка на ліжко. Зараз можу це робити абсолютно сам. Ще на
                туалет навчили сідати, в машину. Тож я вже практично
                самостійний.
              </p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- [*] Reviews finish -->

<!-- [*] Articles homepage start -->
<section class="our-news">
  <div class="our-news__container-fluid">
    <div class="our-news__container">
      <h2 class="our-news__h2">Новини</h2>
      <div class="our-news__block">
        <?php

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category_name' => 'Hовини'
        );

        $latest_posts = new WP_Query($args);

        if ($latest_posts->have_posts()) {
            while ($latest_posts->have_posts()) {
                $latest_posts->the_post();
                ?>
                <div class="our-news__block-item">
                  <!-- [*][*] Article preview start -->
                  <div class="article-short">
                    <div class="article-short__item-image">
                      <?php if (has_post_thumbnail()) : ?>
                          <a href="<?php the_permalink(); ?>">
                              <?php the_post_thumbnail('medium', ['class' => 'article-short__item-img']); ?>
                          </a>
                      <?php else : ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-our-news.png" alt="" class="article-short__item-img" />
                      <?php endif; ?>
                    </div>
                    <div class="article-short__item-info">
                      <h5 class="article-short__item-h5">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      </h5>
                      <div class="article-short__date-tag">
                        <p class="article-short__date-c"><?php echo get_the_date('d.m.Y'); ?></p>
                        <?php
                        $post_tags = get_the_tags();
                        if ($post_tags) {
                            foreach ($post_tags as $tag) {
                                ?>
                                <div class="article-short__tag tag">
                                    <span><?php echo esc_html($tag->name); ?></span>
                                </div>
                                <?php
                            }
                        }
                        ?>
                      </div>
                      <div class="article-short__item-p">
                        <p class="article-short__item-dot">
                          <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- [*][*] Article preview finish -->
                </div>
                <?php
            }
        } else {
            echo '<p>No posts found.</p>';
        }

        wp_reset_postdata();
        ?>
      </div>
      <a href="#" class="button button--tertiary">Перейти до розділу</a>
    </div> 
  </div>
  <div class="our-news__intersect">
    <img
      src="data:image/svg+xml,%3csvg%20width='1440'%20height='72'%20viewBox='0%200%201440%2072'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M1440%2072.0133V0C1207.36%2047.2233%20966.575%2072.013%20720%2072.013C473.425%2072.013%20232.639%2047.2233%200%200V72.013H720L1440%2072.0133Z'%20fill='white'/%3e%3c/svg%3e"
      alt=""
      class="our-news__intersect-img"
    />
  </div>
</section>



<section class="services">
  <div class="services__wrapper">
    <h2 class="services__title">Інші напрямки діяльності</h2>
    <div class="services__cards">
      <div class="services__card">
        <img
          class="services__image"
          src="<?php echo get_theme_file_uri( './assets/img/services-block-image-1.png' ); ?>"
          alt=""
        />
        <h3 class="services__subtitle">Послуги транспортування</h3>
        <p class="services__description">
          Транспортування людей з обмеженими можливостями на всі організовані
          церквою заходи, а також в лікарні, на вокзали тощо.
        </p>
        <div class="services__container">
          <a href="#" class="services__button button button--tertiary"
            >Перейти до розділу
          </a>
        </div>
      </div>
      <div class="services__card">
        <img
          class="services__image"
          src="<?php echo get_theme_file_uri( './assets/img/services-block-image-2.png' ); ?>"
          alt=""
        />
        <h3 class="services__subtitle">Ремонт крісел колісних</h3>
        <p class="services__description">
          Ремонт крісел колісних та інших засобів для пересування проводиться в
          майстерні, яка розташована на території реабілітаційного комплексу.
        </p>
        <div class="services__container">
          <a href="#" class="services__button button button--tertiary"
            >Перейти до розділу
          </a>
        </div>
      </div>
      <div class="services__card">
        <img
          class="services__image"
          src="<?php echo get_theme_file_uri( './assets/img/services-block-image-3.png' ); ?>"
          alt=""
        />
        <h3 class="services__subtitle">Тренувальний Центр фізичної терапії</h3>
        <p class="services__description">
          На базі реабілітаційного комплексу «Агапе» розташований Тренувальний
          Центр фізичної терапії.
        </p>
        <div class="services__container">
          <a href="#" class="services__button button button--tertiary"
            >Перейти до розділу
          </a>
        </div>
      </div>
      <div class="services__card">
        <img
          class="services__image"
          src="<?php echo get_theme_file_uri( './assets/img/services-block-image-4.png' ); ?>"
          alt=""
        />
        <h3 class="services__subtitle">Корисна інформація</h3>
        <p class="services__description">
          Ресурси з корисною інформацією для людей з обмеженими можливостями:
          дорослих та дітей.
        </p>
        <div class="services__container">
          <a href="#" class="services__button button button--tertiary"
            >Перейти до розділу
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- [*] Services finish -->

<?php custom_get_footer(); ?>
