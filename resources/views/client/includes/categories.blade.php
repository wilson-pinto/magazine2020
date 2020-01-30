<h3 class="mb-4 text-uppercase head-border pb-3">Categories</h3>
<ul class="cats ml-0 pl-0 list-unstyled">
    @foreach ($categories as $cat)
    <li class="mt-1">
        <a href="/contents/{{$cat->name}}/{{$cat->cat_rid}}/{{$cat->type}}"
            class="mb-0 mt-2 pb-3 font-alata ml-1 color-secondary text-decoration-none {{$cat->cat_rid == $currentCat->cat_rid ? 'active': ''}} ">
            {{$cat->name}} ({{$currentCat->type == 2 ? $cat->article_count : $cat->post_count }}) <br>
        </a>
    </li>
    @endforeach
</ul>
<hr class="border-btm mt-5">