@extends('home.layout')

@section('head')
  <link rel="stylesheet" href="{{ asset('css/web/term.css') }}">
@endsection

@section('content')
  <div class="banner-default">
    <div class="container">
      <div class="wrap">
        <div class="banner-default__body">
          <h1 class="banner-default__title text-center">Điều khoản sử dụng BossStack</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-term term">
    <div class="container">
      <div class="wrap">
        <div class="term-item">
          <ul>
            <li>BossStack là nền tảng (phần mềm dịch vụ) cung cấp các giải pháp hỗ trợ bóc tách dòng
              tiền, chuyển đổi vận hành hiệu quả chủ yếu dành cho khách hàng doanh nghiệp, được vận
              hành và phát triển bởi Công ty TNHH Lam Minh Anh. Ngoài việc hỗ trợ bằng các công cụ
              công nghệ trực tuyến, chúng tôi không tham gia vào quá trình trực tiếp sử dụng của Khách
              hàng. Các Khách hàng đồng ý sử dụng BossStack là nền tảng làm việc tại doanh nghiệp mình
              sẽ mặc nhiên đồng ý với điều khoản sử dụng (Term of Services) này.</li>
            <li>Chúng tôi sẵn sàng giải thích cho Khách hàng về các điều khoản này. Mọi thắc mắc vui
              lòng liên hệ theo email info@bossstack.vn.</li>
            <li>Công ty TNHH Lam Minh Anh bảo toàn quyền chỉnh sửa nội dung các điều khoản sử dụng này
              tại bất kì thời điểm nào. Chúng tôi sẽ thông báo tới quý Khách hàng khi có cập nhật
              trong Điều khoản sử dụng.</li>
          </ul>
        </div>
        <div class="term-item">
          <h6>1. Các định nghĩa</h6>
          <p><b>BossStack</b>: Là nền tảng (phần mềm dịch vụ) cung cấp các giải pháp hỗ trợ bóc tách
            dòng
            tiền, chuyển đổi vận hành hiệu quả chủ yếu dành cho khách hàng doanh nghiệp, được triển
            khai tại địa chỉ https://bossstack.vn. Nền tảng BossStack gồm các sản phẩm, dịch vụ, giải
            pháp khác nhau nhằm hỗ trợ Khách hàng vận hành và hoạt động hiệu quả. Danh sách chi tiết
            hiển thị tại mục "Sản phẩm", mục “Dịch vụ”, mục “”Giải pháp BossStack” trên website: <a
              href="{{ asset('/') }}">https://bossstack.vn</a></p>
          <p><b>Công ty TNHH Lam Minh Anh</b>: Là đơn vị sở hữu và toàn quyền khai thác nền tảng
            BossStack.
          </p>
          <p><b>Khách hàng</b>: Là các Tổ chức hoặc Cá nhân có nhu cầu sử dụng nền tảng BossStack hoặc
            sử
            dụng một trong các ứng dụng được phát triển bởi Công ty TNHH Lam Minh Anh trên nền tảng
            BossStack.</p>
          <p><b>Hệ thống BossStack của Khách hàng (hệ thống)</b>: Là một hệ thống được BossStack mở
            quyền
            truy cập cho Khách hàng. Đây là không gian làm việc hiệu quả cho Khách hàng và các cá nhân
            được Khách hàng cấp quyền sử dụng.</p>
          <p><b>Tài khoản sử dụng</b>: Là tài khoản người dùng trên hệ thống BossStack của Khách hàng
            mà
            Khách hàng tạo quyền cho người dùng đó. Với mỗi một hệ thống, Khách hàng có toàn quyền cấp
            quyền sử dụng cho các nhân viên hoặc thành viên khác của mình tham gia vào hệ thống. Bằng
            hành động gửi đường dẫn mời tham gia hệ thống tới các địa chỉ email khác nhau. Khách hàng
            đồng ý cấp quyền sử dụng hệ thống BossStack của Khách hàng cho cá nhân và/hoặc tổ chức là
            chủ sở hữu của email đó. Mỗi một đăng ký thành công tên đăng nhập và mật khẩu thông qua
            đường dẫn được gửi bởi Khách hàng được tính là 01 tài khoản sử dụng. Số tài khoản sử dụng
            là căn cứ tính chi phí sử dụng nền tảng BossStack.</p>
        </div>
        <div class="term-item">
          <h6>2. Hệ thống BossStack của Khách hàng</h6>
          <p>Trong quá trình đăng ký BossStack, Khách hàng sẽ tạo tài khoản và mật khẩu.</p>
          <ul>
            <li>Khách hàng có trách nhiệm phải tự bảo mật mật khẩu và tài khoản của mình cũng như chịu
              trách nhiệm hoàn toàn về các hoạt động liên quan đến tài khoản của Khách hàng.</li>
            <li>Mỗi một hệ thống, tùy theo mức gói đăng ký mà Khách hàng có thể tạo tài khoản cho các
              nhân viên của mình tham gia sử dụng hệ thống. Số lượng tài khoản sử dụng tùy thuộc vào
              mức phí đăng ký.</li>
            <li>Khách hàng thông báo ngay cho BossStack khi có bất cứ ai sử dụng tài khoản hoặc mật
              khẩu của mình mà không được phép hay bất cứ lỗi bảo mật nào, và bảo đảm Khách hàng đăng
              xuất (logout) khỏi tài khoản sau mỗi phiên sử dụng. BossStack không thể và sẽ không chịu
              trách nhiệm cho bất cứ sự mất mát, hư hỏng hay trách nhiệm nào khác nếu Khách hàng không
              tuân thủ điều này hay do sự truy cập trái phép vào tài khoản của Khách hàng.</li>
          </ul>
          <p>Trong trường hợp có tranh chấp giữa hai hoặc nhiều bên về quyền sở hữu tài khoản, Khách
            hàng đồng ý rằng Công ty TNHH Lam Minh Anh sẽ là trọng tài duy nhất của tranh chấp đó và
            quyết định của Công ty TNHH Lam Minh Anh (có thể bao gồm việc chấm dứt hoặc đình chỉ tài
            khoản tranh chấp) là quyết định cuối cùng và ràng buộc tất cả các bên.</p>
        </div>
        <div class="term-item">
          <h6>3. Bảo vệ quyền riêng tư</h6>
          <p>Công ty TNHH Lam Minh Anh bảo mật toàn bộ thông tin của Khách hàng và những nội dung các
            tài khoản sử dụng của Khách hàng trao đổi, lưu trữ trên nền tảng BossStack cũng như các
            ứng dụng do BossStack vận hành và phát triển. Chúng tôi sẽ thực hiện và duy trì tất cả các
            biện pháp bảo vệ nội bộ cần thiết và trong khả năng của chúng tôi; mang tính hành chính,
            vật lý và kỹ thuật để bảo vệ cho tính bảo mật và toàn vẹn đối với dữ liệu Khách hàng.</p>
          <p>Công ty TNHH Lam Minh Anh cam kết:</p>
          <ul>
            <li>Không chủ động thay đổi các dữ liệu được tạo ra bởi Khách hàng. Điều này không bao hàm
              việc hệ thống phần mềm có thể tự động sửa đổi kích cỡ, định dạng dữ liệu để phù hợp với
              mục đích hiển thị và chức năng sử dụng.</li>
            <li>Không truy cập vào dữ liệu của Khách hàng trừ trường hợp khắc phục lỗi kỹ thuật hoặc
              theo yêu cầu của Khách hàng hoặc trường hợp phải tuân theo quy định của pháp luật.</li>
            <li>
              Không tiết lộ dữ liệu của Khách hàng ngoại trừ một trong các trường hợp sau:
              <ul>
                <li>Có sự chấp thuận của Khách hàng;</li>
                <li>Phải tuân theo quy định của pháp luật;</li>
                <li>Thuộc trường hợp quy định tại Điều khoản sử dụng này;</li>
              </ul>
            </li>
          </ul>
          <p>Mặc dù vậy, Công ty TNHH Lam Minh Anh có quyền tiếp cận một cách chủ động hoặc tự động
            thông tin về các tài khoản đang tồn tại trên hệ thống (bao gồm họ tên, email) cho một số
            mục đích nhất định, bao gồm:</p>
          <ul>
            <li>Thông báo bằng email đến Khách hàng về các tính năng mới hoặc các sản phẩm mới.</li>
            <li>Thông báo bằng email đến Khách hàng về các sự kiện, chương trình khuyến mại, thông tin
              về sự cố sản phẩm, dịch vụ.</li>
            <li>Liên hệ trực tiếp với Khách hàng để hỗ trợ kỹ thuật hoặc các hỗ trợ khác nhằm tăng
              trải nghiệm người dùng.</li>
          </ul>
          <p>Công ty TNHH Lam Minh Anh bảo toàn quyền sử dụng tên của Khách hàng cho mục đích
            Marketing hoặc trong các chiến dịch quảng bá, giới thiệu sản phẩm hoặc trong các cuộc nói
            chuyện, trao đổi với các Khách hàng khác của Công ty TNHH Lam Minh Anh hoặc các Khách hàng
            tiềm năng khác của Công ty TNHH Lam Minh Anh. Ví dụ, Công ty TNHH Lam Minh Anh có thể đưa
            tên, thương hiệu logo Khách hàng vào trang web, các Fanpage Facebook, LinkedIn,… hiển thị
            tên tất cả các Khách hàng của mình.</p>
        </div>
        <div class="term-item">
          <h6>4. Dữ liệu của Khách hàng và trách nhiệm của các bên</h6>
          <p>Dữ liệu của Khách hàng là mọi thông tin mà Khách hàng gửi, tải lên, truyền hoặc bằng bất
            kể phương thức nào giúp hiển thị thông tin đó trên Hệ thống BossStack của Khách hàng. Dữ
            liệu đó bao gồm: các tin nhắn, các thông báo, các tập tin, các hình ảnh, các video, các ý
            kiến, các nhận xét, các đường dẫn, các nội dung liên quan đến công việc và tất cả mọi
            thông tin được hiển thị trên Hệ thống BossStack của Khách hàng; Dữ liệu của Khách hàng bao
            gồm cả mọi thông tin, đường dẫn, văn bản mà Khách hàng và các tài khoản sử dụng của Khách
            hàng nhập vào BossStack thông qua các nền tảng lưu trữ đám mây như Google Drive, OneDrive,
            DropBox.</p>
          <p>Khách hàng có quyền sử dụng và kiểm soát dữ liệu được đăng tải trên hệ thống BossStack
            của Khách hàng. Công ty TNHH Lam Minh Anh cung cấp các tính năng có sẵn, theo hiện trạng
            và áp dụng chung cho tất cả Khách hàng của Công ty TNHH Lam Minh Anh để Khách hàng xóa
            hoặc trích xuất dữ liệu ra bên ngoài hệ thống phần mềm BossStack. Khách hàng chịu mọi
            trách nhiệm cho tất cả các dữ liệu mà Khách hàng hoặc tài khoản sử dụng của Khách hàng gửi
            đến và/hoặc gửi đi từ nền tảng BossStack.</p>
          <p>Khách hàng hiểu rằng Công ty TNHH Lam Minh Anh không sở hữu bất kì dữ liệu nào mà Khách
            hàng đăng tải lên BossStack; trừ các tài liệu và hoặc giao diện hướng dẫn được Công ty
            TNHH Lam Minh Anh chủ động cung cấp công khai cho Khách hàng.</p>
          <p>Việc quyết định đưa dữ liệu nào lên nền tảng BossStack là toàn quyền của Khách hàng. Tuy
            nhiên, những nội dung sau sẽ KHÔNG ĐƯỢC PHÉP đăng tải trên nền tảng BossStack:</p>
          <ul>
            <li>Làm tổn hại, làm phiền cho người khác hoặc gây ra thương tổn đến con người và tài sản.
            </li>
            <li>Liên quan đến việc công bố các thông tin hoặc tài liệu lừa đảo, gây mất uy tín danh
              dự, quấy rối hoặc mang tính khiêu dâm.</li>
            <li>Xâm phạm các quyền riêng tư hoặc kì thị chủng tộc, tôn giáo, giới tính, người tàn tật.
            </li>
            <li>Xâm phạm quyền sở hữu trí tuệ hoặc các quyền sở hữu khác.</li>
            <li>Cản trở hoặc phá hỏng BossStack (bao gồm nhưng không giới hạn bởi việc truy cập trái
              phép BossStack thông qua bất cứ phương tiện máy móc, phần mềm).</li>
          </ul>
          <p>Công ty TNHH Lam Minh Anh có toàn quyền vô hiệu hóa quyền truy cập vào nội dung dữ liệu
            của Khách hàng nếu chúng tôi xác định dữ liệu được truy cập vi phạm Điều khoản này, hoặc
            chúng tôi nhận được đơn khiếu nại từ tài khoản sử dụng, hoặc thông báo vi phạm sở hữu trí
            tuệ và/hoặc thông báo nội dung có dấu hiệu vi phạm pháp luật của các cơ quan có thẩm
            quyền.</p>
          <p>Khách hàng tự chịu trách nhiệm trước pháp luật nếu sử dụng phần mềm trái với quy định của
            pháp luật.</p>
        </div>
        <div class="term-item">
          <h6>5. Các nền tảng thứ ba thu thập dữ liệu người dùng</h6>
          <p>Công ty TNHH Lam Minh Anh sử dụng các nền tảng Google Analytics, Microsoft, Freshworks và
            Segment để hỗ trợ việc thu thập và phân tích hành vi người dùng. Các bên thứ ba này thu
            thập thông tin về cách người dùng truy cập vào nền tảng BossStack (thông qua trình duyệt
            nào, thiết bị nào, vị trí nào) và hành vi, hoạt động của người dùng trên hệ thống
            BossStack dựa theo chính sách riêng của từng bên. Công ty TNHH Lam Minh Anh sử dụng thông
            tin thu thập được cho việc tìm hiểu, phân tích hành vi, nhu cầu khách hàng nhằm cải tiến
            sản phẩm, dịch vụ đang cung cấp đồng thời phát triển thêm các tính năng, sản phẩm, dịch vụ
            mới phục vụ cho khách hàng.</p>
          <p>Các nền tảng trên đều là các hệ thống lớn phổ biến trên thế giới được đảm bảo các tiêu
            chuẩn bảo mật thông tin cá nhân và dữ liệu người dùng. Công ty TNHH Lam Minh Anh không
            kiểm soát việc các bên thứ ba lưu trữ và sử dụng các dữ liệu thu thập theo điều khoản và
            chính sách họ đưa ra.</p>
          <p>Khách hàng có thể đọc các điều khoản và các chính sách được công bố bởi các bên thứ ba
            này trên trang web của họ để nắm rõ thông tin. Khách hàng sử dụng nền tảng BossStack cũng
            đồng nghĩa với việc tuân thủ các điều khoản dịch vụ của các bên thứ ba này.</p>
        </div>
        <div class="term-item">
          <h6>6. Hỗ trợ phục hồi dữ liệu bị mất</h6>
          <p>Hiện tại Công ty TNHH Lam Minh Anh có hỗ trợ sao lưu dữ liệu định kỳ tự động đối với các
            tài khoản sử dụng nền tảng làm việc hiệu quả BossStack. Trong trường hợp dữ liệu của Khách
            hàng bị mất do lỗi của Công ty TNHH Lam Minh Anh thì Công ty TNHH Lam Minh Anh có trách
            nhiệm hỗ trợ Khách hàng phục hồi dữ liệu về thời gian gần nhất mà hệ thống sao lưu dữ liệu
            tự động của Công ty TNHH Lam Minh Anh lưu lại. Thời gian tối đa để Công ty TNHH Lam Minh
            Anh thực hiện phục hồi dữ liệu cho Khách hàng là 03 (ba) ngày làm việc kể từ khi nhận văn
            bản thông báo lỗi và yêu cầu phục hồi dữ liệu từ người đại diện của Khách hàng.</p>
        </div>
        <div class="term-item">
          <h6>7. Tạm ngừng và chấm dứt sử dụng sản phẩm của Công ty TNHH Lam Minh Anh</h6>
          <p class="title">Thời hạn của thỏa thuận</p>
          <p>Thỏa thuận này bắt đầu kể từ ngày Khách hàng đồng ý và chấm dứt khi tất cả các tài khoản
            được cấp kèm theo thỏa thuận này hết hạn sử dụng. Đối với trường hợp Khách hàng dùng thử,
            nếu Khách hàng không chuyển sang hình thức thuê bao trước khi hết hạn dùng thử, thỏa thuận
            này sẽ được chấm dứt khi hết hạn dùng thử.</p>
          <p class="title">Tạm ngừng</p>
          <p>Công ty TNHH Lam Minh Anh có quyền tạm ngừng việc sử dụng của Khách hàng đối với Khách
            hàng trong các trường hợp sau:</p>
          <ul>
            <li>Khách hàng không thực hiện nghĩa vụ thanh toán các khoản chi phí sử dụng sau khi Công
              ty TNHH Lam Minh Anh đã gửi thông báo yêu cầu thanh toán 30 ngày.</li>
            <li>Công ty TNHH Lam Minh Anh cho rằng hệ thống BossStack đang được Khách hàng sử dụng để
              tham gia vào các cuộc tấn công, gửi thư rác, các hoạt động bất hợp pháp hoặc việc sử
              dụng nền tảng BossStack của Khách hàng gây nguy hại tới Công ty TNHH Lam Minh Anh và
              những đối tượng khác</li>
          </ul>
          <p class="title">Thỏa thuận được coi như chấm dứt trong các trường hợp sau:</p>
          <ul>
            <li>Công ty TNHH Lam Minh Anh đơn phương chấm dứt thỏa thuận do Khách hàng không thực hiện
              nghĩa vụ thanh toán cho Công ty TNHH Lam Minh Anh theo quy định.</li>
            <li>Theo yêu cầu của tòa án và cơ quan nhà nước có thẩm quyền.</li>
            <li>Khi có thỏa thuận của Khách hàng và Công ty TNHH Lam Minh Anh về việc chấm dứt thỏa
              thuận.</li>
          </ul>
          <p>Công ty TNHH Lam Minh Anh không có nghĩa vụ hoàn trả bất kể chi phí nào mà Khách hàng đã
            thanh toán trong trường hợp chấm dứt thỏa thuận vì những lý do đã nêu trên. Công ty TNHH
            Lam Minh Anh chỉ bảo đảm duy trì dữ liệu của Khách hàng trên nền tảng BossStack tối đa là
            90 ngày kể từ ngày chấm dứt thỏa thuận.</p>
        </div>
        <div class="term-item">
          <h6>8. Điều khoản bảo đảm và giới hạn trách nhiệm của chúng tôi</h6>
          <p class="title">Từ chối đảm bảo</p>
          <p>Công ty TNHH Lam Minh Anh không cam đoan, tuyên bố, hoặc bảo đảm rằng việc sử dụng nền
            tảng BossStack của Khách hàng sẽ không bị gián đoạn hoặc không bị lỗi, hoặc nền tảng
            BossStack sẽ đáp ứng yêu cầu Khách hàng hoặc tất cả các lỗi trên phần mềm và/hoặc tài liệu
            sẽ được sửa hoặc hệ thống tổng thể đảm bảo hoạt động của nền tảng BossStack (bao gồm nhưng
            không giới hạn: mạng internet, các mạng truyền dẫn khác, mạng nội bộ và các thiết bị của
            Khách hàng). Công ty TNHH Lam Minh Anh không đảm bảo dưới bất kỳ hình thức nào, dù rõ ràng
            hay ngầm định về các điều kiện như sự thỏa mãn về chất lượng, phù hợp cho nhu cầu sử dụng
            đặc thù hoặc không xâm phạm các quyền của bên thứ ba. Nền tảng BossStack được cung cấp
            dưới dạng "theo hiện trạng - as is" và "có sẵn - as available" cho Khách hàng sử dụng.
            Khách hàng sẽ chịu toàn bộ trách nhiệm trong việc xác định xem nền tảng BossStack hoặc
            thông tin được tạo ra từ nền tảng BossStack là đúng đắn và đáp ứng đầy đủ cho mục đích sử
            dụng của mình.</p>
          <p class="title">Giới hạn về trách nhiệm pháp lý</p>
          <p>Trong bất cứ trường hợp nào Công ty TNHH Lam Minh Anh đều không chịu trách nhiệm về bất
            kỳ các thiệt hại nào trực tiếp, gián tiếp, ngẫu nhiên hoặc mang tính chất trừng phạt, bao
            gồm nhưng không giới hạn ở các thiệt hại do mất doanh thu, mất lợi nhuận, mất lợi thế kinh
            doanh, do ngừng việc hoặc mất mát dữ liệu do hậu quả của: (1) việc sử dụng hoặc không thể
            sử dụng nền tảng BossStack; (2) bất kỳ các thay đổi nào được thực hiện đối với nền tảng
            BossStack; (3) từ chối quyền truy cập hoặc biến đổi các dữ liệu; (4) xóa, sai hỏng, hoặc
            không lưu trữ dữ liệu có trên hoặc thông qua nền tảng BossStack; (5) các tuyên bố hay hành
            vi của bất kỳ bên thứ ba nào đối với nền tảng BossStack; và (6) bất kỳ vấn đề nào khác
            liên quan đến nền tảng BossStack.</p>
        </div>
        <div class="term-item">
          <h6>9. Bất khả kháng</h6>
          <p>Sự kiện bất khả kháng là sự kiện xảy ra mang tính khách quan và nằm ngoài tầm kiểm soát
            của các Bên, bao gồm nhưng không giới hạn: động đất, bão, lũ, lụt, lốc, sóng thần, lở đất;
            hỏa hoạn; dịch bệnh; chiến tranh hoặc có nguy cơ xảy ra chiến tranh và các thảm họa tự
            nhiên khác chưa lường hết được; việc truy cập bossstack.vn hoặc các subdomain của
            *.bossstack.vn bị gián đoạn do can thiệp bởi ISP (Internet service provider), sự thay đổi
            chính sách hoặc sự ngăn cấm theo các quyết định của cơ quan có thẩm quyền.</p>
          <p>Việc một Bên không hoàn thành nghĩa vụ của mình do sự kiện bất khả kháng sẽ không phải là
            cơ sở để bên kia chấm dứt hợp đồng và bồi thường thiệt hại. Tuy nhiên, Bên bị ảnh hưởng
            bởi sự kiện bất khả kháng có nghĩa vụ phải:</p>
          <ul>
            <li>Tiến hành các biện pháp ngăn ngừa hợp lý và các biện pháp thay thế cần thiết để hạn
              chế tối đa ảnh hưởng do sự kiện bất khả kháng gây ra.</li>
            <li>Thông báo bằng văn bản cho bên kia về trường hợp được miễn trách nhiệm và những hậu
              quả có thể xảy ra do sự kiện bất khả kháng trong vòng 03 ngày ngay sau khi có cơ sở để
              xác định việc xảy ra sự kiện bất khả kháng làm ảnh hưởng trực tiếp đến khả năng thực
              hiện nghĩa vụ hợp đồng.</li>
          </ul>
        </div>
        <div class="term-item">
          <h6>10. Phạt và bồi thường thiệt hại</h6>
          <p>Trường hợp một bên vi phạm các nghĩa vụ Hợp đồng liên quan đến nền tảng BossStack, Bên vi
            phạm chịu phạt vi phạm Hợp đồng với mức phạt vi phạm là 8% giá trị phần nghĩa vụ hợp đồng
            bị vi phạm.</p>
          <p>Trường hợp Bên vi phạm vi phạm Hợp đồng gây thiệt hại cho Bên bị vi phạm, Bên vi phạm Bồi
            thường thiệt hại thực tế, trực tiếp xảy ra nhưng tổng mức bồi thường không vượt quá 20%
            giá trị Hợp đồng này.</p>
          <p>Vi phạm và thiệt hại xảy ra phải được một bên thứ ba có thẩm quyền độc lập chứng minh.
            Chi phí chứng minh do Bên có yêu cầu chi trả.</p>
        </div>
        <div class="term-item">
          <h6>11. Giải quyết tranh chấp</h6>
          <p>Tất cả các tranh chấp hoặc các bất đồng phát sinh giữa 02 bên sẽ được giải quyết trên
            tinh thần hợp tác để cùng nhau giải quyết.</p>
          <p>Trong trường hợp 02 bên thương lượng không thể đạt được kết quả thì sẽ đưa ra giải quyết
            theo trình tự tố tụng tại Tòa án có thẩm quyền. Phán quyết của Tòa án là chung thẩm, mang
            quyết định cuối cùng buộc các bên phải tuân thủ.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section section-advertise advertise bg-img-blue">
    <div class="container">
      <div class="wrap">
        <h3 class="advertise-title">Chúng tôi giải phóng chủ doanh nghiệp khỏi gánh nặng quản lý</h3>
        <a class="btn btn-second btn-size-lg btn-contact" href="{{ asset('contact') }}">Liên hệ</a>
      </div>
    </div>
  </div>
@endsection
