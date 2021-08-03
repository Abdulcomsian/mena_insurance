<!-- Modal -->
<div class="modal fade" id="addCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Payment Method</h5>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="inputDiv">
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="inputDiv">
                <input type="text" class="form-control" placeholder="Credit Card Number">
            </div>
            <div class="inputDiv">
                <input type="text" class="form-control" placeholder="MM/YY">
            </div>
            <div class="inputDiv">
                <input type="text" class="form-control" placeholder="CVV">
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="deleteCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
         <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
         <p>Are you sure to Delete this card ?</p>
      </div>
      <div class="modal-footer">
          <button data-dismiss="modal">Yes</button>
          <button data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
        $("button.open-sidebar").click(function(){

            if($(".side-bar").css("display")=="none"){
                $(".side-bar .nav-pills").css("display","block");
                $(".side-bar").css("display","block")
            } else{
                $(".side-bar .nav-pills").css("display","none");
                $(".side-bar").css("display","none")
            }
        })
        $('#subscription_table').DataTable();
        $('#history_table').DataTable();
        $('#payment_table').DataTable();
    });

    const data = {
//         labels: [
//     'International Oilfield Inspection Services Ltd',
//     'Yemen Drilling',
//     'Saddam AL-Hashdi',
//     'Hussain AL-Hashdi',
//     'International Oilfield Services'
//   ],

datasets: [{
  label: 'My First Dataset',
  data: [50, 50, 50, 50, 50],
  backgroundColor: [
    'rgb(0, 97, 254)',
    'rgb(63, 213, 150)',
    'rgb(255, 196, 66)',
    'rgb(255, 128, 33)',
    'rgb(76, 175, 80)'
  ],
}],
options: {
    responsive: true, // Instruct chart js to respond nicely.
    maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height
  }
};
const config = {
type: 'doughnut',
data: data,
};
var myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

    $(document).on('keyup', '#search', function(){
        var query = $('#search').val();
        var country = $('#country').val();
        if (query) {
            $.ajax({
                url: "{{ route('live_search') }}",
                method: 'GET',
                data: {query: query, country: country},
                dataType: 'json',
                success: function (data) {
                    $('#data').empty();
                    if(data.length > 0) {
                        $.each(data, function (index, item) {
                            $('#data').append(`<a href="company_detail/${item.id}"><li class="list-group-item">${item.company_name}</li></a>`)
                        });
                    }
                    else{
                        $('#data').append(`<li class="list-group-item">No Result Found</li>`)
                    }
                },
                error:function (){
                    $('#data').empty();
                }
            })
        }else {
            $('#data').empty();
        }
    });
</script>
