<!--<div class="form">
    <form action="<?/*= $_SERVER['REQUEST_URI']*/?>" method="post">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" name="firstName" id="firstName" value="<?/*= $employee->firstName */?>" requierd />
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" name="lastName" id="lastName" value="<?/*= $employee->lastName */?>" requierd />
        </div>
        <div class="form-group">
            <label for="lastName">Employee address</label>
            <input type="text" class="form-control" name="address" id="address" value="<?/*= $employee->address */?>" requierd />
        </div>
        <label class="custom-control custom-radio">
            <p>Gender</p>
            <input type="radio" name="gender" id="gender" value="1" class="custom-control-input" <?php /*if ($employee->gender == 1) { echo 'Checked'; } */?> > Male
            <input type="radio" name="gender" id="gender" value="2" class="custom-control-input" <?php /*if ($employee->gender == 2) { echo 'Checked'; } */?> > Female
        </label>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" min="0" value="<?/*= $employee->age */?>" requierd />
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" name="position" id="position" value="<?/*= $employee->jobTitle */?>" requierd />
        </div>
        <div class="form-group">
            <label for="jobStatus">Job Status</label>
            <select class="form-control form-control-{3:sm|lg}"  name="jobStatus" id="jobStatus">
                <option value="0">Select one</option>
                <option value="1" <?php /*if ($employee->jobStatus == 1) { echo 'selected'; } */?> >Full Time</option>
                <option value="2" <?php /*if ($employee->jobStatus == 2) { echo 'selected'; } */?> >Part Time</option>
            </select>
        </div>
        <div class="form-check">
            <p>Computer Skills</p>
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="computerSkills[]" value="1" <?php /*if(in_array( 1 , $employee->skill)) { echo 'checked'; } */?> > Windows
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="computerSkills[]" value="2" <?php /*if(in_array( 2 , $employee->skill)) { echo 'checked'; } */?> > Linux
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="computerSkills[]" value="3" <?php /*if(in_array( 3 , $employee->skill)) { echo 'checked'; } */?> > Mac
            </label>
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" name="salary" id="salary" min="0" value="<?/*= $employee->salary */?>" requierd />
        </div>
        <div class="form-group">
            <label for="tax">Tax</label>
            <input type="number" class="form-control" name="tax" id="tax" step="0.1" min="1" max="5" value="<?/*= $employee->tax */?>" requierd />
        </div>
        <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" name="notes" id="notes" rows="3"> <?/*= $employee->notes */?> </textarea>
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
                    <td scope="row"><input type="text" class="form-control" name="firstName" id="firstName" placeholder="First name" value="<?= $employee->firstName ?>" requierd /></td>
                    <td><input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last name" value="<?= $employee->lastName ?>" requierd /></td>
                    <td scope="row"><input type="number" class="form-control" name="age" id="age" min="0" placeholder="Employee Age" value="<?= $employee->age ?>" requierd /></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="address" id="address" placeholder="Employee Address" value="<?= $employee->address ?>" requierd /></td>
                    <td><input type="text" class="form-control" name="position" id="position" placeholder="Employee Job Title" value="<?= $employee->jobTitle ?>" requierd /></td>
                    <td>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="gender" class="flat-red" value="1" <?php if ($employee->gender == 1) { echo 'Checked'; } ?>> Male
                            </label> <br/>
                            <label>
                                <input type="radio" name="gender" class="flat-red" value="2" <?php if ($employee->gender == 2) { echo 'Checked'; } ?> > Female
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select class="form-control form-control-{3:sm|lg}"  name="jobStatus" id="jobStatus" placeholder="status">
                            <option value="0">Select one</option>
                            <option value="1" <?php if ($employee->jobStatus == 1) { echo 'selected'; } ?>>Full Time</option>
                            <option value="2" <?php if ($employee->jobStatus == 2) { echo 'selected'; } ?> >Part Time</option>
                        </select>
                    </td>
                    <td scope="row"><input type="number" class="form-control" name="salary" id="salary" min="0" placeholder="Employe basic Salary" value="<?= $employee->salary ?>" requierd /></td>
                    <td><input type="number" class="form-control" name="tax" id="tax" step="0.1" min="1" max="5" placeholder="Taxes" value="<?= $employee->tax ?>" requierd /></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="form-group">
                            <h4>Computer Skills</h4>
                            <label>
                                <input type="checkbox" class="flat-red" name="computerSkills[]" value="1" <?php if(in_array( 1 , $employee->skill)) { echo 'checked'; } ?>> Windows
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="flat-red" name="computerSkills[]" value="2" <?php if(in_array( 2 , $employee->skill)) { echo 'checked'; } ?> > Linux
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="flat-red" name="computerSkills[]" value="3" <?php if(in_array( 3 , $employee->skill)) { echo 'checked'; } ?>> Mac
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
                                <textarea class="textarea" placeholder="Write note about Employee" name="notes" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    <?= $employee->notes ?>
                                </textarea>
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