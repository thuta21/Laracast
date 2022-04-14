<x-Layout>
    <!-- singloe blog section -->
    <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center">
            <img
              src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
              class="card-img-top"
              alt="..."
            />
            <h3 class="my-3">{{$blog->title}}</h3>
            <h3 class="my-3">Author - <a href="/users/{{$blog->author->username}}">{{$blog->author->name}}</a></h3>
            <h3 class="my-3">Posted at - {{$blog->created_at->diffForHumans()}}</h3>
            <a href="/categories/{{$blog->category->slug}}"><span class="badge bg-primary">{{$blog->category->name}}</span></a>
            <p class="lh-md">
              {{$blog->intro}}
            </p>
          </div>
        </div>
      </div>
  
      <x-Subscribe />
      
      <x-You-May-Like :randomBlogs="$randomBlogs" />
</x-Layout>

    