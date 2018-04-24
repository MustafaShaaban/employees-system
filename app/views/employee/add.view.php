<!--<div class="form">
    <form action="<?/*= $_SERVER['REQUEST_URI']*/?>" method="post">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" requierd />
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" requierd />
        </div>
        <div class="form-group">
            <label for="lastName">Employee address</label>
            <input type="text" class="form-control" name="address" id="address" requierd />
        </div>
        <label class="custom-control custom-radio">
            <p>Gender</p>
            <input type="radio" name="gender" id="gender" value="1" class="custom-control-input" checked> Male
            <input type="radio" name="gender" id="gender" value="2" class="custom-control-input"> Female
        </label>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" min="0" requierd />
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" name="position" id="position" placeholder="Write your Position" requierd />
        </div>
        <div class="form-group">
            <label for="jobStatus">Job Status</label>
            <select class="form-control form-control-{3:sm|lg}"  name="jobStatus" id="jobStatus">
                <option value="0">Select one</option>
                <option value="1" selected>Full Time</option>
                <option value="2">Part Time</option>
            </select>
        </div>
        <div class="form-check">
            <p>Computer Skills</p>
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="computerSkills[]" value="1" checked> Windows
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="computerSkills[]" value="2" checked> Linux
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="computerSkills[]" value="3" checked> Mac
            </label>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" name="salary" id="salary" min="0" placeholder="Write your Salary" requierd />
        </div>
        <div class="form-group">
            <label for="tax">Tax</label>
            <input type="number" class="form-control" name="tax" id="tax" step="0.1" min="1" max="5" placeholder="Write Tax" requierd />
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control btn-primary" name="submit" value="Submit" requierd />
        </div>
    </form>
</div>-->

<div class="cust-table">
    <form action="<?= $_SERVER['REQUEST_URI']?>" method="post">
        <div class="table-responsive">
            <table class="table table-inverse">
                <tbody>
                    <tr>
                        <td scope="row"><input type="text" class="form-control" name="firstName" id="firstName" placeholder="First name" requierd /></td>
                        <td><input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last name" requierd /></td>
                        <td scope="row"><input type="number" class="form-control" name="age" id="age" min="0" placeholder="Employee Age" requierd /></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="address" id="address" placeholder="Employee Address" requierd /></td>
                        <td><input type="text" class="form-control" name="position" id="position" placeholder="Employee Job Title" requierd /></td>
                        <td>
                            <div class="form-group">
                                <label>
                                    <input type="radio" name="gender" class="flat-red" value="1" checked> Male
                                </label> <br/>
                                <label>
                                    <input type="radio" name="gender" class="flat-red" value="2" > Female
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control form-control-{3:sm|lg}"  name="jobStatus" id="jobStatus" placeholder="status">
                                <option value="0">Select one</option>
                                <option value="1" selected>Full Time</option>
                                <option value="2">Part Time</option>
                            </select>
                        </td>
                        <td scope="row"><input type="number" class="form-control" name="salary" id="salary" min="0" placeholder="Employe basic Salary" requierd /></td>
                        <td><input type="number" class="form-control" name="tax" id="tax" step="0.1" min="1" max="5" placeholder="Taxes" requierd /></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="form-group">
                                <h4>Computer Skills</h4>
                                <label>
                                    <input type="checkbox" class="flat-red" name="computerSkills[]" value="1" checked> Windows
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="flat-red" name="computerSkills[]" value="2"> Linux
                                </label>
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" class="flat-red" name="computerSkills[]" value="3"> Mac
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Notes</h3>
                                    <!-- tools box -->
                                    <div class="pull-right box-tools">
                                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                                title="Collapse">
                                            <i class="fa fa-minus"></i></button>
                                        <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip"
                                                title="Remove">
                                            <i class="fa fa-times"></i></button>
                                    </div>
                                    <!-- /. tools -->
                                </div>
                                <div class="box-body pad">
                                    <textarea class="textarea" placeholder="Write note about Employee" name="notes" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="form-group">
                                <input type="submit" class="form-control btn-primary" name="submit" value="Submit" requierd />
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
