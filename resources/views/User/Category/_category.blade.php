<?php
$parentCategories = \App\Http\Controllers\User\MainController::categoryList();
?>
<ul class="fh5co-sub-menu">
    <!-- @if (!isset($page)) show-on-click @endif -->
    @foreach($parentCategories as $parent)
    <li class="subItem flexCenter" tabindex="0">
        @if(count($parent->children))
        <a href="#">{{$parent->title}}</a>
        @include('User.Category.categoryTree', ['children'=>$parent->children])
        @else
        <a href="{{route('category_places', ['id'=>$parent->id, 'slug'=>$parent->title])}}">{{$parent->title}}</a>
        @endif
    </li>
    @endforeach
</ul>
