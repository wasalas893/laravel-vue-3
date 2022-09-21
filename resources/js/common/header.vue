<template>
   
        <div>
            <div>
             <nav class="navbar navbar-expand-lg navbar-light bg-light">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
               
                  <div class="container-fluid">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="nav-list">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                              </li>
                          </ul>
                        </div>
                        </div>
                    </div>
                  </div>
               
              </nav>
            </div>
    
            <router-view></router-view>
            
            <div>
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    <a class="text-white" href="#"></a>
                  </div>
            </div>
        </div>
    
</template>
<style>
    #navbarNav {
        display: flex !important;
        justify-content: center;
    }
</style>