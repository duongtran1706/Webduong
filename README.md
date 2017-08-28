# Webduong
# lenh chay upload len github
Kiểm tra trạng thái thay đổi
git status
Đưa những file vào danh sách trước khi commit (bỏ qua nếu không có file mới được tạo)

git add -A  (-A Tất cả files) ( git add .)
Commit những thay đổi trước khi push lên server

git commit -a -m “Thông tin ngắn gọn về thay đổi này” (-a Tất cả thay đổi)
Tải lên server nhánh master

git push -u origin master

# cài tinymce trong laravel
 dowload tinymce trên trang https://www.tinymce.com/download/
 add vào thư mục public
 trong file cần dùng 
 <script src="{{asset('public/tinymce/js/tinymce/tinymce.min.js')}}"></script>
  
 tinymce.init({
  
               editor_selector : "mceEditor",
  
               selector: '#mytextarea',
  
               plugins: [
  
                         'advlist autolink lists link image charmap print preview hr anchor pagebreak',
  
                         'searchreplace wordcount visualblocks visualchars code fullscreen',
  
                         'insertdatetime media nonbreaking save table contextmenu directionality',
  
                             'emoticons template paste textcolor colorpicker textpattern imagetools responsivefilemanager'
  
                           ],
  
                           toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | responsivefilemanager',
  
                           toolbar2: 'print preview media | forecolor backcolor emoticons',
  
                           image_advtab: true,
  
                         templates: [
  
                             { title: 'Test template 1', content: 'Test 1' },
  
                             { title: 'Test template 2', content: 'Test 2' }
  
                           ],
  
 });
 