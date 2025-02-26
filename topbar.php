<style>
  .dashboard{
  font-size: larger;
  font-weight: bolder;
}
  .icon-l0-margin{
    margin-left: 10px;
    color: white;
  }

  .logout-text{
    color: white;
  }

  .wage-it{
    letter-spacing: 2px;
    color: white;
  }

  .bg-color-nav{
    background-color: #2D336B;
  }
</style>

<nav class="navbar fixed-top bg-color-nav" style="padding:0;min-height:3.5rem">
  <div class="container-fluid mt-2 mb-2">
    <div class="col-lg-12">
      <div class="col-md-1 float-left" style="display: flex;">

      </div>
      <div class="col-md-4 float-left">
        <div class="dashboard">
        <large><a class="wage-it">WAGEit</a></large>
        </div>
        
      </div>
      <div class="col-md-2 float-right text-white">
        <a href="ajax.php?action=logout" class="logout-text">Logout
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right icon-l0-margin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
          </svg></a>
      </div>
    </div>
  </div>

</nav>