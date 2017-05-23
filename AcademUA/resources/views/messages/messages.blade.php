@section('title','Message')
@section('messageCurrent','current_page_item')
@section('headerClass','alt static-header')
@include('master')



<!-- https://bootsnipp.com/snippets/featured/responsive-mail-inbox-and-compose -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" style="float:right;" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
         <form action="/messages/create/" >
            <div class="login-page" style="width:80%; padding: 0;margin:0 auto; background-color:transparent;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="login-form">
                                    <div class="login-title">
                                        <span class="text">Create a new message</span>
                                        
                                    </div><!-- End Title -->
                                    <form method="post" action="/" id="login-form">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                                                    <input type="text" value="{{ old('subject') }}" name="subject" placeholder = "Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="input">
                           
                                                    <input  value="{{ old('receiver') }}" type="text" name="receiver" placeholder = "Receiver">
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-6">
                                                <div class="input">
                                                
                                                    <input  value="{{ old('message') }}" type="text" name="message" placeholder = "Message" >
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="input clearfix">
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                            
                                        </div><!-- end row -->
                                    </form><!-- End form -->
                                </div><!-- end login form -->
                            </form>
                            </div><!-- end col-md-12 -->
                        </div><!-- end row -->
                    </div><!-- End Login Page -->
      </div>
    </div>

  </div>
</div>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
 <div class="mail-box">
                  <aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar">
                              <img  width="64" hieght="60" src="/images/users/ <?php echo Auth::user()->id ?> ">
                          </a>
                          <div class="user-name">
                              <h2><?php echo Auth::user()->name ?> </h2>
                              <span><?php echo Auth::user()->email ?></span>
                          </div>
                      </div>
                      <!-- Trigger the modal with a button -->
                    
                      <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal" title="Compose" style="padding-top: 0;" class="btn btn-compose">
                              Compose
                          </a>
                      </div>
                      <ul class="inbox-nav inbox-divider">
                          <li class="tablinks">
                              <a href="#" class="tablinks" onclick="openCity(event, 'inbox')" id="defaultOpen"><i class="fa fa-inbox"></i> Inbox <span class="badge pull-right"><?php echo sizeof($messagesInbox) ?></span></a>
                          </li>
                          <li class="tablinks">
                              <a href="#" onclick="openCity(event, 'outbox')"><i class="fa fa-envelope-o"></i> Sent Mail <span class="badge pull-right"><?php echo sizeof($messagesOutbox) ?></span></a>
                          </li>
                      </ul>
                    

                  </aside>
                  <aside class="lg-side">
                      <div class="inbox-head">
        
                          <form action="#" class="pull-right position">
                              <div class="input-append">
                                  <input type="text" class="sr-input" placeholder="Search Mail">
                                  <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                              </div>
                          </form>
                      </div>

                      
                      <div class="inbox-body tabcontent" id="inbox">
                          <table class="table table-inbox table-hover ">
                            <tbody >
                            <?php
                            foreach ($messagesInbox as $message) {
                              echo "<tr class='unread'>";
                                  echo "<td class='inbox-small-cells' >";
                                      echo "<input type='checkbox' class='mail-checkbox'>";
                                  echo "</td>";
                                  echo "<td class='view-message dont-show'>" . $message->getUserReceive() ."</td>";
                                  echo "<td class='view-message' >"  . $message->subject . "</td>";
                                  echo "<td class='view-message text-right'  >". $message->created_at . "</td>";
                                  echo "<td class='inbox-small-cells' >";
                                      echo "<a href='/messages/delete/" .$message->id . "'>Delete</a>";
                                  echo "</td>";
                                  echo "<td class='inbox-small-cells' >";
                                        echo "<a href='#modalMessage" . $message->id . "' data-toggle='modal'>View</a>";
                                    echo "</td>";
                              echo "</tr>";
                              // MODAL //
                              echo "<div id='modalMessage" . $message->id . "' class='modal fade' role='dialog'>";
                                echo "<div class='modal-dialog'>";
                                    echo "<div class='modal-content'>";
                                    echo "<div class='modal-header'>";
                                        echo "<button type='button' style='float:right;' class='close' data-dismiss='modal'>&times;</button>";
                                        echo "<h4 class='modal-title'>" . $message->subject . "</h4>";
                                    echo "</div>";
                                    echo "<div class='modal-body'>";
                                        echo "<p>" . $message->message . "</p>";
                                    echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                            ?>
                            </tbody>
                          </table>
                      </div>
                      <div class="inbox-body tabcontent" id="outbox">
                          <table class="table table-inbox table-hover">
                            <tbody>
                            
                            <?php
                            foreach ($messagesOutbox as $message) {
                            
                                echo "<tr class='unread'>";
                                echo "<a href='#modalMessage1' data-toggle='modal'>";
                                    echo "<td class='inbox-small-cells' >";
                                        echo "<input type='checkbox' class='mail-checkbox'>";
                                    echo "</td>";
                                    echo "<td class='view-message dont-show'>" . $message->getUserReceive() ."</td>";
                                    echo "<td class='view-message' >"  . $message->subject . "</td>";
                                    echo "<td class='view-message text-right'  >". $message->created_at . "</td>";
                                    echo "<td class='inbox-small-cells' >";
                                        echo "<a href='/messages/delete/" .$message->id. "'>Delete</a>";
                                    echo "</td>";
                                    echo "<td class='inbox-small-cells' >";
                                        echo "<a href='#modalMessage1' data-toggle='modal'>View</a>";
                                    echo "</td>";
             
                                    echo "</a>";
                                echo "</tr>"; 
                                // MODAL //
                              echo "<div id='modalMessage" . $message->id . "' class='modal fade' role='dialog'>";
                                echo "<div class='modal-dialog'>";
                                    echo "<div class='modal-content'>";
                                    echo "<div class='modal-header'>";
                                        echo "<button type='button' class='close' data-dismiss='modal'>&times;</button>";
                                        echo "<h4 class='modal-title'>Modal Header</h4>";
                                    echo "</div>";
                                    echo "<div class='modal-body'>";
                                        echo "<p>Some text in the modal.</p>";
                                    echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                            ?>
                            </tbody>
                          </table>
                      </div>
                  </aside>
              </div>
</div>

@include('footer')