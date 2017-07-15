<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ route('home') }}" class="navbar-brand">CityU GE Guide</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('courses.index') }}">All Courses</a></li>
                        <li><a href="{{ route('departments.index') }}">Academic units</a></li>
                        <li><a href="#">Statistics</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('courses.category', ['category' => 'area-1']) }}">Area 1</a></li>
                        <li><a href="{{ route('courses.category', ['category' => 'area-2']) }}">Area 2</a></li>
                        <li><a href="{{ route('courses.category', ['category' => 'area-3']) }}">Area 3</a></li>
                        <li><a href="{{ route('courses.category', ['category' => 'university-requirements']) }}">University Requirements</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('courses.category', ['category' => 'foundation']) }}">Foundation</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('search.index') }}">Advanced search</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('reviews.index') }}">Reviews</a></li>
                <li><a href="{{ route('feed') }}">Feed</a></li>
            </ul>
            
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Course code or title">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</nav>
