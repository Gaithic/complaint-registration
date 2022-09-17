$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function(){
        $('#state_name').on('change', function(e){
          var state_id =  e.target.value;
          console.log(state_id);
          $.ajax({
            url:'/get-cities',
            type:'get',
            data: {
                state_id: state_id
            },
             success:function (response) {
                const data = response.data;
                console.log(data)
                console.log(typeof data)
                $('#city').empty();
                data.forEach(e => {
                    $('#city').append('<option>' + e.city + '</option>' )
                })

            }
         })
        })

    })
