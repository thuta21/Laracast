<!-- blogs section -->
@props(['blogs','categories','currentCategory']);
<section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">
      <div class="dropdown">
        <button class="btn btn-outline btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          {{isset($currentCategory) ? $currentCategory->name : 'Filtered By Category'}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          @foreach ($categories as $category)
          <li><a class="dropdown-item" href="/categories/{{$category->slug}}">{{$category->name}}</a></li>
          @endforeach
        </ul>
      </div>
      {{-- <select name="" id="" class="p-1 rounded-pill mx-3">
        <option value="">Filter by Tag</option>
      </select> --}}
    </div>
    <form action="/" class="my-3"> 
      <div class="input-group mb-3">
        <input
          name= "search"
          value="{{request('search')}}"
          type="text"
          autocomplete="false"
          class="form-control"
          placeholder="Search Blogs..."
        />
        <button
          class="input-group-text bg-primary text-light"
          id="basic-addon2"
          type="submit"
        >
          Search
        </button>
      </div>
    </form>
    <div class="row">
      @forelse ($blogs as $blog)
        <div class="col-md-4 mb-4">
            <x-Blog-Cart :blog="$blog"></x-Blog-Cart>
        </div>
      @empty
        <p class="text-center">No Blogs Found</p>
      @endforelse
      
    </div>
  </section>