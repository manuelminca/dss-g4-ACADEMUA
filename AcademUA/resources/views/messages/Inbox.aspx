<%@ Page Title="Inbox" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="True" CodeBehind="Inbox.aspx.cs" Inherits="AcademUAWebAPP.Inbox" Async="true" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">
    <div class="sectionHeading">
        <h1><%: Title %></h1>
    </div>

    <div class="myContainer">
        <p class="text-danger">
            <asp:Literal runat="server" ID="ErrorMessage" />
        </p>

        <div class="container">
    <div class="row">
        
    <hr />

    <!---------------------->
    <!-------- INBOX ------->
    <!---------------------->
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <asp:Linkbutton runat="server" ID="LinkButtonWrite" style="margin-left:0px" OnClick="WriteMessage_Click" Text="WRITE MESSAGE" CssClass="btn btn-danger btn-sm btn-block" /> <!-- button to write a new message -->
            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a><span class="glyphicon glyphicon-download"></span><span class="badge pull-right"><%: numAllInboxMessages() %></span> Inbox </a>
            </ul>
        </div>

        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#allInbox" data-toggle="tab"><span class="glyphicon glyphicon-inbox"></span><span class="badge pull-right"><%: numAllInboxMessages() %></span> <!-- this is used to show all, teacher or student messages -->
                    All messages</a></li>
                <li><a href="#inboxStudent" data-toggle="tab"><span class="glyphicon glyphicon-user"></span><span class="badge pull-right"><%: numStudentsInboxMessages() %></span>  <!-- this is used to show all, teacher or student messages -->
                    Students</a></li>
                <li><a href="#inboxTeacher" data-toggle="tab"><span class="glyphicon glyphicon-user"></span><span class="badge pull-right"><%: numTeacherInboxMessages() %></span>  <!-- this is used to show all, teacher or student messages -->
                    Teachers</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!---------------------->
                <!----- ALL INBOX ------>
                <!---------------------->
                <div class="tab-pane fade in active" id="allInbox">
                    <div class="list-group">
                        <asp:Repeater ID="repeaterAllInbox" runat="server" OnItemCommand="repeaterAllInbox_OnItemCommand"> <!-- to repeat with all the inbox-->
                                <ItemTemplate>
                                    <div class="list-group-item">
                                          <div runat="server" visible='<%# (string)Eval("Leido") == "No" %>'> <!-- used to show or not the button of read-->
                                            <asp:LinkButton ID="MarkRead_Click" causesValidation="false" style="float: left; display: block; padding-left: 5px; padding-right: 5px;" runat="server" CommandName="Si" CommandArgument='<%#Eval("id") %>'><span class="glyphicon glyphicon-remove"></span></asp:LinkButton>
                                        </div>
                                        <div runat="server" visible='<%# (string)Eval("Leido") == "Si" %>'><!-- used to show or not the button of read-->
                                            <asp:LinkButton ID="LinkButton2" causesValidation="false" style="float: left; display: block; padding-left: 5px; padding-right: 5px;" runat="server" CommandName="No" CommandArgument='<%#Eval("id") %>'><span class="glyphicon glyphicon-ok"></span></asp:LinkButton>
                                        </div>
                                    <span class="name" style="min-width: 120px; display: inline-block;"><%# ((Academia.MessagesEN)Container.DataItem).Sender %></span>
                                    <span class=""><%# ((Academia.MessagesEN)Container.DataItem).Subject %></span>
                                    <span class="text-muted" style="font-size: 11px;">- <%# ((Academia.MessagesEN)Container.DataItem).Content %></span>
                                    <span class="badge"><%# ((Academia.MessagesEN)Container.DataItem).Date %></span>
                                    </div>
                                </ItemTemplate>
                            </asp:Repeater>
                    </div>
                </div>
                <!---------------------->
                <!---- STUDENT INBOX --->
                <!---------------------->
                <div class="tab-pane fade in" id="inboxStudent">
                    <div class="list-group">
                        <asp:Repeater ID="repeaterInboxStudent" runat="server" OnItemCommand="repeaterInboxStudent_OnItemCommand"> <!-- to repeat with the student inbox-->
                                <ItemTemplate>
                                    <div class="list-group-item">
                                           <div runat="server" visible='<%# (string)Eval("Leido") == "No" %>'> <!-- used to show or not the button of read -->
                                            <asp:LinkButton ID="MarkRead_Click" causesValidation="false" style="float: left; display: block; padding-left: 5px; padding-right: 5px;" runat="server" CommandName="Si" CommandArgument='<%#Eval("id") %>'><span class="glyphicon glyphicon-remove"></span></asp:LinkButton>
                                        </div>
                                        <div runat="server" visible='<%# (string)Eval("Leido") == "Si" %>'><!-- used to show or not the button of read -->
                                            <asp:LinkButton ID="LinkButton2" causesValidation="false" style="float: left; display: block; padding-left: 5px; padding-right: 5px;" runat="server" CommandName="No" CommandArgument='<%#Eval("id") %>'><span class="glyphicon glyphicon-ok"></span></asp:LinkButton>
                                        </div>
                                    <span class="name" style="min-width: 120px; display: inline-block;"><%# ((Academia.MessagesEN)Container.DataItem).Sender %></span>
                                    <span class=""><%# ((Academia.MessagesEN)Container.DataItem).Subject %></span>
                                    <span class="text-muted" style="font-size: 11px;">- <%# ((Academia.MessagesEN)Container.DataItem).Content %></span>
                                    <span class="badge"><%# ((Academia.MessagesEN)Container.DataItem).Date %></span>
                                    </div>
                                </ItemTemplate>
                            </asp:Repeater>
                    </div>
                </div>
                <!---------------------->
                <!---- TEACHER INBOX --->
                <!---------------------->
                <div class="tab-pane fade in" id="inboxTeacher">
                    <div class="list-group">
                        <asp:Repeater ID="repeaterInboxTeacher" runat="server" OnItemCommand="repeaterInboxTeacher_OnItemCommand"><!-- to repeat with the teacher inbox-->
                                <ItemTemplate>
                                    <div class="list-group-item">
                                          <div runat="server" visible='<%# (string)Eval("Leido") == "No" %>'> <!-- used to show or not the button of read -->
                                            <asp:LinkButton ID="MarkRead_Click" causesValidation="false" style="float: left; display: block; padding-left: 5px; padding-right: 5px;" runat="server" CommandName="Si" CommandArgument='<%#Eval("id") %>'><span class="glyphicon glyphicon-remove"></span></asp:LinkButton>
                                        </div>
                                        <div runat="server" visible='<%# (string)Eval("Leido") == "Si" %>'><!-- used to show or not the button of read -->
                                            <asp:LinkButton ID="LinkButton2" causesValidation="false" style="float: left; display: block; padding-left: 5px; padding-right: 5px;" runat="server" CommandName="No" CommandArgument='<%#Eval("id") %>'><span class="glyphicon glyphicon-ok"></span></asp:LinkButton>
                                        </div>
                                    <span class="name" style="min-width: 120px; display: inline-block;"><%# ((Academia.MessagesEN)Container.DataItem).Sender %></span>
                                    <span class=""><%# ((Academia.MessagesEN)Container.DataItem).Subject %></span>
                                    <span class="text-muted" style="font-size: 11px;">- <%# ((Academia.MessagesEN)Container.DataItem).Content %></span>
                                    <span class="badge"><%# ((Academia.MessagesEN)Container.DataItem).Date %></span>
                                    </div>
                                </ItemTemplate>
                            </asp:Repeater>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <br />
    <!---------------------->
    <!------- OUTBOX ------->
    <!---------------------->
    <div class="row">
        <div class="col-sm-3 col-md-2">
            <asp:Linkbutton runat="server" ID="LinkButtonWrite2" style="margin-left:0px" OnClick="WriteMessage_Click" Text="WRITE MESSAGE" CssClass="btn btn-danger btn-sm btn-block" />
            <hr />
            <ul class="nav nav-pills nav-stacked">
                <li class="active" ><a><span class="glyphicon glyphicon-upload"></span><span class="badge pull-right"><%: numOutboxMessages() %></span> Outbox </a>
            </ul>
        </div>

        <div class="col-sm-9 col-md-10">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="active"><a href="#allOutbox" data-toggle="tab"><span class="glyphicon glyphicon-inbox"></span><span class="badge pull-right"><%: numOutboxMessages() %></span>
                    All messages</a></li>
                <li><a href="#outboxStudent" data-toggle="tab"><span class="glyphicon glyphicon-user"></span><span class="badge pull-right"><%: numStudentOutboxMessages() %></span>
                    Students</a></li>
                <li><a href="#outboxTeacher" data-toggle="tab"><span class="glyphicon glyphicon-user"></span><span class="badge pull-right"><%: numTeacherOutboxMessages() %></span>
                    Teachers</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!---------------------->
                <!----- ALL OUTBOX ----->
                <!---------------------->
                <div class="tab-pane fade in active" id="allOutbox">
                    <div class="list-group">
                        <asp:Repeater ID="repeaterAllOutbox" runat="server" OnItemCommand="repeaterAllOutbox_OnItemCommand"><!-- to repeat with all the outbox-->
                                <ItemTemplate>
                                    <div class="list-group-item">
                                    <span class="name" style="min-width: 120px; display: inline-block;"><span class="text-muted" style="font-size: 11px;">To: </span><%# ((Academia.MessagesEN)Container.DataItem).Receiver %></span>
                                    <span class=""><%# ((Academia.MessagesEN)Container.DataItem).Subject %></span>
                                    <span class="text-muted" style="font-size: 11px;">- <%# ((Academia.MessagesEN)Container.DataItem).Content %></span>
                                    <span class="badge"><%# ((Academia.MessagesEN)Container.DataItem).Date %></span>
                                    </div>
                                </ItemTemplate>
                            </asp:Repeater>
                    </div>
                </div>
                <!---------------------->
                <!---- STUDENT OUTBOX --->
                <!---------------------->
                <div class="tab-pane fade in" id="outboxStudent">
                    <div class="list-group">
                        <asp:Repeater ID="repeaterOutboxStudent" runat="server" OnItemCommand="repeaterOutboxStudent_OnItemCommand"> <!-- to repeat with the student outbox-->
                                <ItemTemplate>
                                    <div class="list-group-item">
                                    <span class="name" style="min-width: 120px; display: inline-block;"><span class="text-muted" style="font-size: 11px;">To: </span><%# ((Academia.MessagesEN)Container.DataItem).Receiver %></span>
                                    <span class=""><%# ((Academia.MessagesEN)Container.DataItem).Subject %></span>
                                    <span class="text-muted" style="font-size: 11px;">- <%# ((Academia.MessagesEN)Container.DataItem).Content %></span>
                                    <span class="badge"><%# ((Academia.MessagesEN)Container.DataItem).Date %></span>
                                    </div>
                                </ItemTemplate>
                            </asp:Repeater>
                    </div>
                </div>
                <!---------------------->
                <!---- TEACHER OUTBOX --->
                <!---------------------->
                <div class="tab-pane fade in" id="outboxTeacher">
                    <div class="list-group">
                        <asp:Repeater ID="repeaterOutboxTeacher" runat="server" OnItemCommand="repeaterOutboxTeacher_OnItemCommand"> <!-- to repeat with the teacher outbox-->
                                <ItemTemplate>
                                    <div class="list-group-item">
                                    <span class="name" style="min-width: 120px; display: inline-block;"><span class="text-muted" style="font-size: 11px;">To: </span><%# ((Academia.MessagesEN)Container.DataItem).Receiver %></span>
                                    <span class=""><%# ((Academia.MessagesEN)Container.DataItem).Subject %></span>
                                    <span class="text-muted" style="font-size: 11px;">- <%# ((Academia.MessagesEN)Container.DataItem).Content %></span>
                                    <span class="badge"><%# ((Academia.MessagesEN)Container.DataItem).Date %></span>
                                    </div>
                                </ItemTemplate>
                            </asp:Repeater>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- MODAL POPUP SEND MESSAGE -->
            <!-- ModalPopupExtender -->
            <ajaxToolkit:ModalPopupExtender ID="mp1" runat="server" PopupControlID="PanelWrite" TargetControlID="LinkButtonWrite"
                CancelControlID="btnClose" BackgroundCssClass="modalBackground">
            </ajaxToolkit:ModalPopupExtender>
            <ajaxToolkit:ModalPopupExtender ID="mp2" runat="server" PopupControlID="PanelWrite" TargetControlID="LinkButtonWrite2"
                CancelControlID="btnClose" BackgroundCssClass="modalBackground">
            </ajaxToolkit:ModalPopupExtender>

            <asp:Panel ID="PanelWrite" runat="server" CssClass="modalPopup" align="center" style = "display:none">
                <section id="contact" style="background-image: url(../img/map-image.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="padding-bottom: 30px;">Send a message</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <asp:label runat="server" associatedcontrolid="Name" cssclass="col-md-2 control-label">Sender</asp:label>
		                            <div class="col-md-10"> <!-- fields we have to fill-->
			                            <asp:textbox runat="server" id="Name" cssclass="form-control" ReadOnly="true"/>
			                            <asp:requiredfieldvalidator runat="server" controltovalidate="Name" cssclass="text-danger" errormessage="The name field is required."/>
		                            </div>
                                </div>
                                <div class="form-group">
                                    <asp:label runat="server" associatedcontrolid="receiverName" cssclass="col-md-2 control-label">Receiver username</asp:label>
		                            <div class="col-md-10">
			                            <asp:Textbox runat="server" id="receiverName" cssclass="form-control"/>
			                            <asp:requiredfieldvalidator runat="server" controltovalidate="receiverName" cssclass="text-danger" errormessage="The receiver username field is required."/>
		                            </div>
                                </div>
                                <div class="form-group">
                                    <asp:label runat="server" associatedcontrolid="subjectEmail" cssclass="col-md-2 control-label">Subject</asp:label>
		                            <div class="col-md-10">
			                            <asp:textbox runat="server" id="subjectEmail" cssclass="form-control"/>
			                            <asp:requiredfieldvalidator runat="server" controltovalidate="subjectEmail" cssclass="text-danger" errormessage="The subject field is required."/>
		                            </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <asp:label runat="server" associatedcontrolid="messageEmail" cssclass="col-md-2 control-label">Message</asp:label>
		                            <div class="col-md-10">
			                            <asp:textbox runat="server" id="messageEmail" cssclass="form-control" textmode="MultiLine"/>
			                            <asp:requiredfieldvalidator runat="server" controltovalidate="messageEmail" cssclass="text-danger" errormessage="The subject field is required."/>
		                            </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <asp:button causesvalidation="false" style="margin-top: 2px; margin-bottom:2px;" runat="server" onclick="send_Click" text="Send message" cssclass="btn btn-primary btn-lg"/>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
                <asp:Button ID="btnClose" runat="server" Text="Close" />
            </asp:Panel>
            <!-- ModalPopupExtender -->



         <hr />
    </div>

</asp:Content>
