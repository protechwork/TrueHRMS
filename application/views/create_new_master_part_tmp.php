<style>
    .form-control {
      padding: 0;
      margin: 0;
    }
    .btn {
      padding: 0.15rem 0.3rem;
      margin: 0;
    }
    tr {
      padding: 0;
      margin: 0;
    }
	.small-textbox {
      height: 25px; /* Adjust the height as needed */
    }
  </style>

<div class="container mt-5">
  <h2>Add/Remove Rows</h2>
  <table class="table">
    <thead>
      <tr  style="padding: 0; margin: 0;">
        <th  style="padding: 0; margin: 0;">#</th>
        <th  style="padding: 0; margin: 0;">Data</th>
        <th  style="padding: 0; margin: 0;">Option</th>
        <th  style="padding: 0; margin: 0;">Action</th>
      </tr>
    </thead>
    <tbody id="tableBody">
      <!-- Rows will be added dynamically here -->
    </tbody>
  </table>
  <button class="btn btn-primary mb-3" id="addRowBtn"><i class="fas fa-plus"></i> Add Row</button>
</div>
<script>
  $(document).ready(function(){
    // Counter for unique IDs
    let rowCount = 0;

    // Function to add a new row
    function addRow() {
      rowCount++;
      $('#tableBody').append(`
        <tr  style="padding: 0; margin: 0;">
          <td  style="padding: 0; margin: 0;">${rowCount}</td>
          <td  style="padding: 0; margin: 0;"><input type="text" class="form-control form-control-sm small-textbox"  style="padding: 0; margin: 0;" name="data"></td>
          <td  style="padding: 0; margin: 0;">
            <select class="form-control form-control-sm small-textbox" name="option"  style="padding: 0; margin: 0;">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </td>
          <td  style="padding: 0; margin: 0;"><button style="margin-top: 1px;"  class="btn btn-danger btn-sm removeRow small-textbox"><i   class="fas fa-trash"></i></button></td>
        </tr>
      `);
      updateRowNumbers();
    }

    // Function to remove a row
    $(document).on('click', '.removeRow', function(){
      $(this).closest('tr').remove();
      updateRowNumbers();
    });

    // Function to update row numbers
    function updateRowNumbers() {
      $('#tableBody tr').each(function(index) {
        $(this).find('td:first').text(index + 1);
      });
      rowCount = $('#tableBody tr').length;
    }

    // Add the first row when the document is ready
    addRow();

    // Add row button click event
    $('#addRowBtn').click(function(){
      addRow();
    });
  });
</script>
