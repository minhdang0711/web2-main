<!DOCTYPE html>
<html lang="en">
<a href="{{ route('logout') }}" class="small">Logout</a>
<div class="wrapper row2">
    <div class="rounded">
        <nav id="mainav" class="clear">
            <!-- nav bar -->
            <ul class="clear">
                <li class="active"><a href="{{ route('admin.home') }}">Home</a></li>
                <hr>
                <li><a href="{{ route('user.index') }}">student</a></li>
                <li><a href="">coordinator</a></li>
                <li><a href="">master</a></li>
                <li><a href="">adminstrator</a></li>
                </hr>
            </ul>
            <!-- ################################################################################################ -->
        </nav>
    </div>
</div>
@yield('1')

</html>
