<div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
        ESHOP
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{Request::is('dashboard') ? 'active' : ''}}">
          <a class="nav-link" href="./dashboard.html">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('categories') ? 'active' : ''}} ">
          <a class="nav-link" href="{{ url('categories') }}">
            <i class="material-icons">person</i>
            <p>categories</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-category') ? 'active' : ''}}">
          <a class="nav-link" href="{{ url('add-category') }}">
            <i class="material-icons">person</i>
            <p>Add Category</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('products') ? 'active' : ''}} ">
          <a class="nav-link" href="{{ url('products') }}">
            <i class="material-icons">person</i>
            <p>Product</p>
          </a>
        </li>
        <li class="nav-item {{Request::is('add-products') ? 'active' : ''}}">
          <a class="nav-link" href="{{ url('add-products') }}">
            <i class="material-icons">person</i>
            <p>Add Product</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="./tables.html">
            <i class="material-icons">content_paste</i>
            <p>Table List</p>
          </a>
        </li>
      </ul>
    </div>
  </div>