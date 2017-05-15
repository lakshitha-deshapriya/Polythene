<nav class="navbar navbar-dark bg-inverse navbar-fixed-top">
   <a class="navbar-brand" href="" >Company Mangement</a>
   <ul class="nav navbar-nav">
      <li class="nav-item {{Request::is('/') ? "active":""}}">
         <a class="nav-link" href="{{route('pc.Home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('Attendance') ? "active":""}}">
         <a class="nav-link" href="{{route('pc.Attendance')}}">Attendance <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('DailyProduction') ? "active":""}}">
         <a class="nav-link" href="{{route('pc.DailyProduction')}}">Productions </a>
      </li>
      <li class="nav-item {{Request::is('CompactDetails') ? "active":""}}">
         <a class="nav-link" href="{{route('pc.CompactDetails')}}">Compact Details <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{Request::is('PurchaseDetails') ? "active":""}}">
         <a class="nav-link" href="{{route('pc.PurchaseDetails')}}">Purchasing</a>
      </li>
      <li class="nav-item {{Request::is('TradingDetails') ? "active":""}}">
         <a class="nav-link" href="{{route('pc.TradingDetails')}}">Trading Details</a>
      </li>
      
      <li class="nav-item dropdown dropdown-pull-right">
         <a class="nav-link dropdown-toggle right  " href="/" id="supportedContentDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
         <div class="dropdown-menu " aria-labelledby="supportedContentDropdown">
            <a class="dropdown-item" href="posts">Posts</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Logout</a>
         </div>
      </li>
   </ul>
</nav>