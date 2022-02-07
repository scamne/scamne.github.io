-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th2 01, 2022 lúc 09:47 PM
-- Phiên bản máy phục vụ: 10.3.32-MariaDB-log-cll-lve
-- Phiên bản PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tmmovipme_mmovip`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `abc`
--

CREATE TABLE `abc` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` text CHARACTER SET utf8mb4 NOT NULL,
  `sdt` text DEFAULT NULL,
  `id_fb` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dich_vu` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `money` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `gmail` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `ngan_hang` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `vi_momo` text CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `matkhau` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `level` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `taikhoan`, `matkhau`, `level`) VALUES
(1, 'leduchoangphuc2504', 'phucdz', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_bang_chung`
--

CREATE TABLE `anh_bang_chung` (
  `id` int(11) NOT NULL,
  `code` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `anh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `anh_bang_chung`
--

INSERT INTO `anh_bang_chung` (`id`, `code`, `anh`) VALUES
(41, 'scriptalertmscript', '/anh/BC_7531.png'),
(40, 'le-duc-hoang-phuc', '/anh/BC_3908.png'),
(39, 'trinh-ngoc-minh-dz', '/anh/BC_0264.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bang`
--

CREATE TABLE `bang` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `bang`
--

INSERT INTO `bang` (`id`, `code`) VALUES
(88, 'ADMIN'),
(90, 'CTV'),
(91, 'Kiểm Duyệt Viên'),
(92, 'Thủ Quỹ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `code` varchar(32) DEFAULT NULL,
  `username` text CHARACTER SET utf8mb4 NOT NULL,
  `sdt` text DEFAULT NULL,
  `id_fb` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `dich_vu` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `mo_ta` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `money` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `gmail` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `ngan_hang` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `vi_momo` text CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `cards`
--

INSERT INTO `cards` (`id`, `code`, `username`, `sdt`, `id_fb`, `website`, `dich_vu`, `mo_ta`, `money`, `gmail`, `ngan_hang`, `vi_momo`) VALUES
(73, 'minh', 'Trinh Ngoc Minh', '0334955115', '100041184143723', 'trinhngocminh.com', 'Thiết kế Website chuẩn SEO :', 'hello all friend', '1000000', 'trinhngocminhads@gmail.com', 'MBANK 273009123', '0387911646'),
(74, 'le-duc-hoang-phuc', 'Lê Đức Hoàng Phúc ', '0344447499', '100024922485378', 'Hoàngphúc.vn', 'Hiệp Hội Trung Gian Uy Tín : ', '<p>bịp</p>', '1111111', 'lphuc1794@gmail.com', 'MB BANK : 00025042003 <br> MB Bank : 250420030 <br> Thẻ Siêu Rẻ : 0344447499', '0344447499');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `code`) VALUES
(147, 'Thiết kế Website chuẩn SEO :'),
(173, 'Hiệp Hội Trung Gian Uy Tín : ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctv`
--

CREATE TABLE `ctv` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` text NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `ctv`
--

INSERT INTO `ctv` (`id`, `code`, `username`, `email`, `password`, `level`) VALUES
(924, 'HACK', '', '', '', '1'),
(925, 'HACK', 'admin', '', 'phucok', '1'),
(926, 'HACK', '', '', '', '1'),
(927, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(928, 'HACK', 'admin', '', 'phucok', '1'),
(929, 'HACK', 'admin', '', 'phucoj', '1'),
(930, 'HACK', 'admin', '', 'phucoj', '1'),
(931, 'HACK', 'admin', '', 'phucoj', '1'),
(932, 'HACK', '', '', '', '1'),
(933, 'HACK', '', '', '', '1'),
(934, 'HACK', '', '', '', '1'),
(935, 'HACK', '', '', '', '1'),
(936, 'HACK', '', '', '', '1'),
(937, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(938, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(939, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(940, 'HACK', 'admin', '', 'phucok', '1'),
(941, 'HACK', 'admin', '', 'phucok', '1'),
(942, 'HACK', 'admin', '', 'phucok', '1'),
(943, 'HACK', 'admin', '', 'phucok', '1'),
(944, 'HACK', 'admin', '', 'phucok', '1'),
(945, 'HACK', 'admin', '', 'phucok', '1'),
(946, 'HACK', 'admin', '', 'phucok', '1'),
(947, 'HACK', 'admin', '', 'phucok', '1'),
(948, 'HACK', 'admin', '', 'phucok', '1'),
(949, 'HACK', 'admin', '', 'phucok', '1'),
(950, 'HACK', 'admin', '', 'phucok', '1'),
(951, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(952, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(953, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(954, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(955, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(956, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(957, 'HACK', 'admin', '', 'phucok', '1'),
(958, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(959, 'HACK', '', '', '', '1'),
(960, 'HACK', '', '', '', '1'),
(961, 'HACK', '', '', '', '1'),
(962, 'HACK', 'admin', '', 'phucok', '1'),
(963, 'HACK', 'admin', '', 'admin', '1'),
(964, 'HACK', 'admin', '', 'admin', '1'),
(965, 'HACK', 'doantrungnguyen', '', '2353177927', '1'),
(966, 'HACK', '', '', '', '1'),
(967, 'HACK', 'admin', '', 'phucok', '1'),
(968, 'HACK', 'admin', '', 'phucok', '1'),
(969, 'HACK', '', '', '', '1'),
(970, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(971, 'HACK', '', '', '', '1'),
(972, 'HACK', 'admin', '', 'phucok', '1'),
(973, 'HACK', '', '', '', '1'),
(974, 'HACK', '', '', '', '1'),
(975, 'HACK', 'admin', '', 'phucok', '1'),
(976, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(977, 'HACK', '', '', '', '1'),
(978, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(979, 'HACK', '', '', '', '1'),
(980, 'HACK', '', '', '', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `msg1` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg2` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg3` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg4` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg5` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg6` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg7` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg8` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg9` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg10` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg11` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg12` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `msg13` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `14` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `15` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `16` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `17` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `18` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `19` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `20` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side1` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side2` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side3` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side4` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side5` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side6` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side7` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side8` text COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `side9` text COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `lang`
--

INSERT INTO `lang` (`id`, `msg1`, `msg2`, `msg3`, `msg4`, `msg5`, `msg6`, `msg7`, `msg8`, `msg9`, `msg10`, `msg11`, `msg12`, `msg13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `side1`, `side2`, `side3`, `side4`, `side5`, `side6`, `side7`, `side8`, `side9`) VALUES
(1, 'Vui lòng điền vào ô trống !', 'Tài khoản không tồn tại trong hệ thống !', 'Địa chỉ Email đã tồn tại !', 'IP này đã đạt giới hạn tạo tài khoản!', 'Đăng ký tài khoản thành công !', 'Vui lòng điền vào ô trống !', 'Tài khoản không tồn tại trong hệ thống !', 'Mật khẩu không chính xác', 'Đăng nhập thành công !', 'Vui lòng điền vào ô trống !', 'Địa chỉ email không hợp lệ !', 'Địa chỉ email không có trong hệ thống !', 'Vui lòng kiểm tra hòm thư Email của bạn!', 'Vui lòng đăng nhập để tiếp tục', 'Số lượng tối thiểu là 1 tài khoản !', 'Số lượng tối đa khi mua 1 lần là 10.000 !', 'Loại tài khoản không tồn tại !', 'Số tài khoản trong hệ thống không đủ !', 'Số dư không đủ thanh toán!', 'Số lượng tài khoản không đủ, vui lòng thử lại', 'Home', 'Mua Tài Khoản', 'Nạp Tiền', 'Lịch Sử Đơn Hàng', 'Công Cụ', 'Giftcode', 'Cộng Tác Viên', 'Yêu Cầu Hỗ Trợ', 'Liên Hệ Facebook');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `site_image` text DEFAULT NULL,
  `site_domain` text DEFAULT NULL,
  `site_favicon` text DEFAULT NULL,
  `site_logo` text DEFAULT NULL,
  `site_tenweb` text DEFAULT NULL,
  `site_mota` text DEFAULT NULL,
  `facebook` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `sdt_admin` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `setting`
--

INSERT INTO `setting` (`id`, `site_image`, `site_domain`, `site_favicon`, `site_logo`, `site_tenweb`, `site_mota`, `facebook`, `sdt_admin`) VALUES
(1, '/img/cover.png', 'https://mmovip.me/', '/upload/favicon_3521.png', 'https://i.imgur.com/HYMox8C.png', 'MMOVIP.ME', 'MMOVIP.ME | nơi tố các những kẻ lừa đảo đang lộng hành trên mạng xã hội', 'https://www.facebook.com/hphucgdtg', '0344447499');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `ly_do` text DEFAULT NULL,
  `status` varchar(32) NOT NULL,
  `sdt` text DEFAULT NULL,
  `ngan_hang` text DEFAULT NULL,
  `stk` text DEFAULT NULL,
  `anh` varchar(100) DEFAULT NULL,
  `bangchung` text DEFAULT NULL,
  `hoten_np` text DEFAULT NULL,
  `sdt_np` text DEFAULT NULL,
  `id_fb` text DEFAULT NULL,
  `ngay` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`id`, `username`, `ly_do`, `status`, `sdt`, `ngan_hang`, `stk`, `anh`, `bangchung`, `hoten_np`, `sdt_np`, `id_fb`, `ngay`) VALUES
(107, 'Lê Đức Hoàng Phúc', 'Phúc Đẹp Trai Vải Lồn', 'scam', '0344447499', 'MB BANK', '00025042003', 'le-duc-hoang-phuc', NULL, 'Phúc Đẹp Trai', '0813319394', 'https://www.facebook.com/hphucgdtg', '28-01-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tmanh`
--

CREATE TABLE `tmanh` (
  `id` int(11) NOT NULL,
  `code` varchar(9999) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `anh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `time` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tmanh`
--

INSERT INTO `tmanh` (`id`, `code`, `anh`, `title`, `note`, `status`, `time`) VALUES
(18, 'ra-mat-website-mmovipme-co-gi-dang-chu-y', '/anh1/tmanh_5260.png', 'Ra Mắt Website MMOVIP.ME Có Gì Đáng Chú Ý ?', 'Sự ra đời của MMO VIP :\r\nMình là 1 người làm về Maketing, dân SEO chính hiệu, mình biết khá nhiều về Google, Facebook. và chưa bao giờ mình nghĩ với lượng kiến thức hiện tại mình sẽ bị Scam. và cho đến một ngày đẹp trời điều đó đã sảy ra, nó lừa đảo 1 cách rất tinh vi. và cũng không hiểu sao đầu óc lúc đó lại lú lẫn đến mức mất hết cảnh giác. Tuy rằng số tiền mình bị scam chỉ có 500.000đ . nhưng thực sự nó là tiền mồ hôi xương máu, do chính công sức mình làm ra. và bị scam 1 cách trắng trợn.. thực sự là xót vô cùng. mình hiểu cái cảm giác này của những bạn bị scam. Và sau đêm hôm đó, cú lừa định mệnh đó thì mình đã có ý tưởng tạo nên MMOVIP.ME !!!!!!!\r\n\r\nÝ tưởng của mình:\r\nPhân tích:\r\n\r\nThuật toán Facebook luôn hạn chế việc tìm kiếm những thông tin, dữ liệu kiểu STK ngân hàng, Số CMT, SĐT….\r\nBạn sẽ không thể tìm thấy kết quả gì khi search những từ khóa liên quan đến thông tin cá nhân trên Fb, trừ khi bạn là thành viên trong Gr có bài tố cáo đó, hoặc có một chút gì đó liên quan đến STK đã bị tố cáo đó . thì bạn mới có thể nhìn thấy bài bài phốt\r\nCho dù bạn có phốt, tố cáo một ai đó lên các Group trên FB thì 1, 2 ngày sau Admin thường sẽ xóa bài đó của bạn, vì nội dung vi phạm chính sách, gây ảnh hưởng đến Group của họ. hoặc nếu admin không gỡ, thì kẻ lừa đảo bạn chỉ cần dùng một vài tut, trick fb là có thể khiến bài của bạn bị Facebook báo vi phạm vè gỡ ngay sau đó.\r\nMục đích:\r\n\r\nTạo ra một Website lưu trữ dữ liệu lừa đảo trên mxh mà không chịu bất kỳ hạn chế seach của một thuật toán nào trên Facebook\r\nLà nơi bạn có thể tố cáo kẻ lừa đảo, và phát tán thông tin kẻ lừa đảo đó lên Google, Facebook giúp người dùng có thể tìm kiếm 1 cách dễ dàng những thông tin lừa đảo\r\nLà nơi giới thiệu cho bạn biết những người chuyên làm dịch vụ trên mxh, link Fb chuẩn, thông tin chuẩn của một người làm dv nào đó.\r\nLà nơi lưu trữ bằng chứng lừa đảo, cung cấp góp phần nào thúc đẩy quá trình thu thập dữ liệu phục vụ cho công tác điều tra của “Cục An ninh mạng và phòng, chống tội phạm sử dụng công nghệ cao”\r\nLời khuyên:\r\n\r\nFacebook thì có thể do bị hack rồi mang đi lừa đảo, hoặc dùng Facebook clone, Via, Fake trung gian….\r\nChứng minh nhân dân, giấy tờ tùy thân có thể dùng Photoshop chỉnh sửa\r\nSĐT thì sim rác rất nhiều, không thiếu\r\nChúng thậm chí có thể Fake cả 1 trang facebook tĩnh rồi quay lại video log acc, đọc tn cho bạn xem..\r\nNgười thân nhắn tin chuyển tiền hộ vào 1 STK lạ thì đừng vội chuyển, hãy nhấc đt lên và gọi trực tiếp cho người thân để xác thực nhé ..!\r\nVậy nên đừng bao giờ tin những gì mà người đối diện đưa cho bạn xem qua trên màn hình máy tính. Mắt thấy tay sờ, tai nghe vẫn còn bị lừa, huống chi là mấy cái hình ảnh trên mạng. Chỉ có 1 thông tin duy nhất và chuẩn xác nhất mà chúng ta có thể xác định được kẻ lừa đảo là ai đó chính là “Số Tài Khoản Ngân Hàng” mà kẻ Scam dùng để nhận tiền.\r\n\r\nHệ thống website bao gồm 4 Mục:\r\nMục 1: Ô tìm kiếm “STK Ngân Hàng” kiểm tra dữ liệu Scam\r\nMục 2: Nút “Gửi đơn tố cáo” những kẻ Scam\r\nMục 3: Danh sách những “Tài khoản Scam cập nhật mới nhất” trong ngày\r\nMục 4: “Chi tiết thông tin Scam” bao gồm: Chủ tài khoản, STK ngân hàng, Bằng chứng, TT người tố cáo, Link nguồn phốt\r\nHoạt động dựa trên:\r\nSự đóng góp hỗ trợ của mọi người trên MXH\r\nLưu trữ thông tin chính là “Chủ tài khoản“, “STK Ngân hàng” của kẻ lừa đảo.\r\nChức năng Tố cáo để đưa thông tin của những kẻ lừa đảo lên website\r\nChức năng tìm kiếm thông tin người giao dịch dựa theo  “STK Ngân hàng”\r\nCác bạn hãy hình thành cho mình thói quen “Kiểm tra STK Ngân hàng, SĐT “ trên website MMOVIP.ME để tránh bị Scam, mất tiền oan các bạn nhé….!\r\n\r\nMMOVIP.ME là website để người dùng tố cáo & kiểm tra những dữ liệu Scam được chia sẻ bởi nhiều người dùng trong cộng đồng MXH Facebook\r\nNhững bài do Admin đăng đều có Link nguồn phốt trên Facebook, và Profile người đăng phốt\r\nNhững bài đăng do thành viên tố cáo thì người đăng nội dung tố cáo sẽ chịu trách nhiệm về tính xác thực của nội dung mình đăng lên.\r\nChỉ có SĐT tố cáo nằm ở mục liên hệ của bài phốt, nhắn tin SMS cho admin mới có thể xóa được đơn tố cáo\r\nWebsite luôn luôn có khâu kiểm chứng với những nội đăng lên, nhưng không thể chắc chắn 100% thông tin là hoàn toàn chính xác, Vậy nên người bị tố cáo có thể Liên Hệ với người tố cáo hoặc Admin để được giải quyết\r\nLời muốn nói:\r\nMọi thứ trên Website đều miễn phí. Nếu nhờ website bạn đã có lần Phát hiện và né tránh được Scam hoặc giúp ích 1 phần nào đó cho bạn. Hãy ủng hộ mình bằng những chia sẻ, gim nhóm, gửi bài tố cáo, gửi data scam.. như vậy sẽ giúp được cộng đồng nhiều hơn… Cám ơn. Cám ơn các bạn rất nhiều”\r\nWebsite phát triển phần lớn nhờ vào sự ủng hộ và truyền thông của các bạn Admin Group.\r\nNhững AE làm DV uy tín được mình tin tưởng và giới thiệu trên Website có thể ủng hộ mình bằng những bài pots Giới thiệu website với ae bạn bè trên FB cá nhân hoặc Group ae quản lý .. Mình cám ơn!\r\nMình tạo ra website, và mình cũng hiểu những hạn chế, điểm yếu của nó. Mình mong các AE cao thủ trong giới Coder, MMO, Trick FB, bên công an, ban ngành các cấp…  ủng hộ mình, ủng hộ website để loại bỏ những thành phần K làm mà đòi có ăn, Scam, Lừa đảo trên mxh.\r\nWebsite tạo ra dựa trên ý tưởng giúp ích cho cộng đồng xanh sạch, vậy nên mong mình mọi người cùng xây dựng chứ đừng sân si, phá hoại\r\nNội dung trên website được kiểm duyệt dựa trên kinh nghiệm phân tích của mình nên vẫn sẽ có thể có những sai sót, nhầm lẫn, Vậy nên mọi vấn đề về sai sót, nhầm lẫn thông tin các bạn vui lòng liên hệ với mình để được giải quyết\r\nMMO VIP tự tạo ra lợi nhuận và dùng chính lợi nhuận đó để duy trì website và trả tiền cho CTV thu thập dữ liệu lừa đảo bổ sung vào data\r\nCam kết 100% Code website wp đơn giản, dễ sử dụng. không yêu cầu, thu thập, lưu trữ bất kì thông tin nào của người dùng\r\n', 'hoantat', '09:21 28-01-2022'),
(17, 'about-me', '/anh1/tmanh_0629.png', 'About Me', 'all by minh !', 'xuly', '04:36 27-01-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `code` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `level` varchar(32) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `code`, `username`, `password`, `level`) VALUES
(1, 'ABCXYZ', 'admin', 'phucok', '1'),
(2, 'ABCXYZ', 'Ahihingocminh', 'minhtn2007', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `abc`
--
ALTER TABLE `abc`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `anh_bang_chung`
--
ALTER TABLE `anh_bang_chung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bang`
--
ALTER TABLE `bang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `ctv`
--
ALTER TABLE `ctv`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tmanh`
--
ALTER TABLE `tmanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `abc`
--
ALTER TABLE `abc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `anh_bang_chung`
--
ALTER TABLE `anh_bang_chung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `bang`
--
ALTER TABLE `bang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT cho bảng `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT cho bảng `ctv`
--
ALTER TABLE `ctv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=981;

--
-- AUTO_INCREMENT cho bảng `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `tmanh`
--
ALTER TABLE `tmanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
