
    
    
    <div class="thumbnail">
        <img src="img/v1.jpeg">
        <div class="thumbnail-textbox">
            <button type="button" onclick="buttonSection('Play')"><i class="far fa-play-circle"></i></button>
            <button type="button" onclick="buttonSection('Add')"><i class="fas fa-plus-circle"></i></button>
            <button type="button" onclick="buttonSection('Like')"><i class="far fa-thumbs-up"></i></button>
            <button type="button" onclick="buttonSection('Dislike')"><i class="far fa-thumbs-down"></i></button>     
            <button data-toggle="modal" data-target="#movieModal" class="float-right"><i class="fas fa-chevron-down"></i></button> 
            <br>
            <h1>98% Match</h1>
            <span class="badge badge-light">16+</span>
            <p>5 seasons</p>
            <span class="badge badge-light">HD</span>
            <br>
            <p>Violent</p><p style="color:gray;margin: 1px;">&#x25CF</p><p>Gritty</p><p style="color:gray;margin: 1px;">&#x25CF</p><p>Dark</p>
        </div>
    </div>



    <!--MODAL-->
    <div class="modal" tabindex="-1" role="dialog" id="movieModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <!--<div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>-->
            <div class="modalTop">
                
                <img class="modalImg" src="img/v3.jpeg">
                <div class="darkbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="far fa-times-circle"></i>
                    </button>
                    <div class="modalImgFooter">
                        <button type="button" class="btn btn-light" onclick="buttonSection('Play')"><i class="fas fa-play"></i>Play</button>
                        <button type="button" class="defbtn" onclick="buttonSection('Add')"><i class="fas fa-plus-circle"></i></button>
                        <button type="button" class="defbtn" onclick="buttonSection('Like')"><i class="far fa-thumbs-up"></i></button>
                        <button type="button" class="defbtn" onclick="buttonSection('Dislike')"><i class="far fa-thumbs-down"></i></button>   
                        <button type="button" class="defbtn" onclick="buttonSection('Audio')"><i class="fas fa-volume-mute"></i></button>   
                    </div> 
                </div>
                <div class="modalText">
                    <h1>98% Match</h1>
                    <p>2013</p>
                    <span class="badge badge-light">16+</span>
                    <p>5 seasons</p>
                    <span class="badge badge-light">HD</span>
                    <br><br>
                    <div class="row">
                        <div class="col-8">
                            <p>A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family's future. </p>
                        </div>
                        <div class="col-4">
                            <p class="smallFont grayColor">Cast:</p><p class="smallFont"> Bryan Cranston, Aaron Paul, Anna Gunn, more..</p>
                            <br>
                            <p class="smallFont grayColor">Genres:</p><p class="smallFont">Crime TV Show, TV Thrillers, TV Dramas</p>
                            <br>
                            <p class="smallFont grayColor">This show is:</p><p class="smallFont"> Violent, Gritty, Dark</p>
                        </div>   
                        <div class="col-12 space"></div>
                        <div class="col-9">
                            <h2>Episodes</h2>
                        </div>
                        <div class="col-3">
                            <select class="custom-select">
                                <option value="1">Season 1</option>
                                <option value="2">Season 2</option>
                            </select>
                        </div>  
                        <div class="col-12">
                            <div id="1" class="card card-selected">
                             <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img src ="img/v2.jpeg">
                                    </div>
                                    <div class="col-6">
                                        <h2>Pilot</h2>
                                        <br>
                                        <p>In the episode, chemistry teacher Walter White (Bryan Cranston) is diagnosed with terminal lung cancer.</p>
                                    </div>
                                    <div class="col-2">
                                        <p>58 min</p>
                                    </div>
                                </div>
                             </div>
                            </div>
                            <div id="2" class="card">
                                <div class="card-body">
                                   <div class="row">
                                       <div class="col-4">
                                           <img src ="img/v4.jpeg">
                                       </div>
                                       <div class="col-6">
                                           <h2>Cat's in the Bag</h2>
                                           <br>
                                           <p>In the episode, chemistry teacher Walter White (Bryan Cranston) is diagnosed with terminal lung cancer.</p>
                                       </div>
                                       <div class="col-2">
                                           <p>45 min</p>
                                       </div>
                                   </div>
                                </div>
                               </div>
                        </div>                
                    </div>
                </div>
            </div>

          </div>
        </div>
      </div>


