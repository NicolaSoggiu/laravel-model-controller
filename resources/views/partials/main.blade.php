<main>
    <div class="main-content">
      <div class="heroes"></div>
      <div class="container">
          <span class="current">CURRENT SERIES</span>
          <div class="comics d-flex flex-wrap">
                @foreach($comics as $comic)
                <div class="card">
                  <img src="{{ Vite::asset($comic['thumb']) }}" alt=""/>
                  <h6 class="comic-description"> {{ $comic["title"] }}</h6>
                </div>
                  
                @endforeach
          </div>
          <div class="more d-flex justify-content-center">
            <span class="button">LOAD MORE</span>
          </div>
        </div>
        <div class="images d-flex justify-content-center align-items-center g-3">
          <div class="mini-card">
            <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="" />

              <span class="ps-1 pe-3">DIGITAL COMICS</span> 
          </div>
          <div class="mini-card d-flex align-items-center ps-3">
            <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="" />


              <span class="ps-1 pe-3">DC MERCHANDISE</span>
          </div>
          <div class="mini-card">
            <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="" />

              <span class="ps-1 pe-3">SUBSCRIPTION</span>
          </div>
          <div class="mini-card">
            <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="" />

              <span class="ps-1 pe-3">COMIC SHOP LOCATOR</span>
          </div>
          <div class="mini-card">
            <img src="{{ Vite::asset('resources/img/visa.svg')}}" alt="" />

              <span class="ps-1 pe-3">DC POWER VISA</span>
          </div>
      </div>
    </div>
  </main>