<script type="text/javascript">
        function confirmation(ev)
        {
          ev.preventDefault();

          var urlToRedirect = ev.currentTarget.getAttribute('href');
          console.log(urlToRedirect);

          swal({
            title:"Are you sure to delete this?",
            title:"This delete will be parmanent",
            icon:"warning",
            buttons: true,
            dangerMode: true,
          })

          .then((willCancel)=>{
            if(willCancel)
          {
            window.location.href=urlToRedirect;
          }
          });
        }
      </script>