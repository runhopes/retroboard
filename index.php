<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "view/head.php"; ?>
</head>
<body class="alt-menu sidebar-noneoverflow">

    <?php include "view/header.php"; ?>

    <div class="main-container" id="container">
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-top-spacing layout-spacing">
                        <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="compose-box">
                                            <div class="compose-content" id="addTaskModalTitle">
                                                <h5 class="add-task-title">Add Comment</h5>
                                                <h5 class="edit-task-title">Edit Task</h5>
                                                <div class="addTaskAccordion" id="add_task_accordion">
                                                    <div class="card task-text-progress">
                                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#add_task_accordion">
                                                            <div class="card-body p-0">
                                                                <form action="javascript:void(0);">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <textarea placeholder="Task Text" id="scrum_text" rows="10" class="form-control" name="taskText"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> Discard</button>
                                        <button data-btnfn="addTask" class="btn add-tsk" onclick="saveScrumType()" data-dismiss="modal">Add Task</button>
                                        <button data-btnfn="editTask" class="btn edit-tsk" style="display: none;">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="addListModal" tabindex="-1" role="dialog" aria-labelledby="addListModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="compose-box">
                                            <div class="compose-content" id="addListModalTitle">
                                                <h5 class="add-list-title">Add List</h5>
                                                <h5 class="edit-list-title">Edit List</h5>
                                                <form action="javascript:void(0);">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="list-title">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                                                                <input id="s-list-name" type="text" placeholder="List Name" class="form-control" name="task">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg> Discard</button>
                                        <button class="btn add-list">Add List</button>
                                        <button class="btn edit-list" style="display: none;">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog" aria-labelledby="deleteConformationLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content" id="deleteConformationLabel">
                                    <div class="modal-header">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                        </div>
                                        <h5 class="modal-title" id="exampleModalLabel" style="color: white !important;">Delete the task?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="">If you delete the comment it will be gone forever. Are you sure you want to proceed?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger" data-remove="task">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row scrumboard" id="cancel-row">
                            <div class="col-lg-12 layout-spacing">

                                <div class="task-list-section row">

                                    <div data-section="s-new" class="task-list-container col-md-4" data-connect="sorting">
                                        <div class="connect-sorting">
                                            <div class="task-container-header">
                                                <h6 class="s-heading" data-listTitle="In Progress">Went Well</h6>
                                            </div>

                                            <div id="wentWell">
                                                <div class="connect-sorting-content" data-sortable="true">
                                                    <div data-draggable="true" class="card simple-title-task" style="">
                                                        <div class="card-body">

                                                            <div class="task-header alert alert-light-success">                                                    
                                                                <div class="">
                                                                    <h4 class="" data-taskTitle="Any action can be written here.">Any action can be written here.</h4>
                                                                </div>
                                                                <div class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 s-task-edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="add-s-task">
                                                <a class="addTask" onclick="setScrumType(1)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Comment</a>
                                            </div>

                                        </div>
                                    </div>

                                    <div data-section="s-in-progress" class="task-list-container col-md-4" data-connect="sorting">
                                        <div class="connect-sorting">
                                            <div class="task-container-header">
                                                <h6 class="s-heading" data-listTitle="Complete">To Improve</h6>
                                            </div>

                                            <div id="toImprove">
                                                <div class="connect-sorting-content" data-sortable="true">
                                                    <div data-draggable="true" class="card simple-title-task ui-sortable-handle" style="">
                                                        <div class="card-body">

                                                            <div class="task-header  alert alert-light-danger">                                                    
                                                                <div class="">
                                                                    <h4 class="" data-tasktitle="Any action can be written here.">Any action can be written here.</h4>
                                                                </div>
                                                                <div class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 s-task-edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="add-s-task">
                                                <a class="addTask" onclick="setScrumType(2)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Comment</a>
                                            </div>

                                        </div>
                                    </div>

                                    <div data-section="s-approved" class="task-list-container col-md-4" data-connect="sorting">

                                        <div class="connect-sorting">
                                            <div class="task-container-header">
                                                <h6 class="s-heading" data-listTitle="New">Action Items</h6>
                                            </div>
                                            <div id="actionItems">
                                                <div class="connect-sorting-content" data-sortable="true">
                                                    <div data-draggable="true" class="card simple-title-task ui-sortable-handle" style="">
                                                        <div class="card-body">

                                                            <div class="task-header  alert alert-light-warning">                                                    
                                                                <div class="">
                                                                    <h4 class="" data-tasktitle="Any action can be written here.">Any action can be written here.</h4>
                                                                </div>
                                                                <div class="">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 s-task-edit"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 s-task-delete"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="add-s-task">
                                                <a class="addTask" onclick="setScrumType(3)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg> Add Task</a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php include "view/footer.php"; ?>
        </div>
    </div>

    <?php include "view/footer_js.php"; ?>
</body>
</html>