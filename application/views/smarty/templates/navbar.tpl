<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{$app_name}</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            {if $loggedIn==true}
            <li><a href="{$urlAction}=createmovies">Create Listing</a></li>
            <li><a href="{$urlAction}=listmovies">Show Listings</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
            {/if}
           {if $loggedIn==false}
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="username" placeholder="Username" value="admin" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" value="letmein" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          {/if}
        </div><!--/.navbar-collapse -->
      </div>
    </div>