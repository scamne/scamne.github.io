-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th2 02, 2022 lúc 07:11 AM
-- Phiên bản máy phục vụ: 10.5.13-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chongsca_tranhluadao`
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
(79, '1-le-quy-phu', '1. Lê Quý Phú', '0375227405', '100037077223527', 'Trung Gian - Mua Bán - Đổi Tiền', 'Admin', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info <span class=\"Apple-converted-space\"> </span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '100000000', 'lequyphu86@gmail.com', 'MB BANK : 0375227405', '0375227405'),
(83, '1-le-ducanh', '1. Lẹ ĐứcAnh', '0886788579', '100040049017513', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info <span class=\"Apple-converted-space\"> </span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '1000000', '0', 'Teckcombank  19032042400009 ', '0886788579'),
(84, '2-vu-duy', '2. Vũ Duy', '0328471327', '100053835980164', 'Trung Gian - Mua Bán - Đổi Tiền ', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '222222', 'vduy0217@gmail.com', 'Tsr 0328471327', '0976631649'),
(85, '3-nguyen-duy-khang', '3. Nguyễn Duy Khang', '0707224442', '100054353529429', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '222333', '0', 'Tsr : voduykhang6688@gmail.com', '0375813337'),
(86, '4-nguyen-trung-kien', '4. Nguyễn Trung Kiên ', '0394493237', '100021721307822', 'Trung Gian - Mua Bán Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '111111', 'maitrungkienmedia69@gmail.com', '0', '0394493237'),
(87, '5-le-bao', '5. Lê Bảo', '0902730034', '100038413780731', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '200000', '0', 'Tsr : 0902730034', '0902730034'),
(88, '6-truc-thanh', '6. Trúc Thanh', '0867518285', '100007817854124', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '123456', '0', 'Mb Bank 0867518285', '0867518285'),
(89, '7-bui-hieu', '7. Bùi Hiếu ', '0976519416', '100047708441466', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '200000', '0', 'MB Bank 3338833688888', '0976519416'),
(90, '8-duc-cung', '8. Đức Cùng ', '0862088525', '100013143880978', 'Trung Gian - Mua Bán - Đổi Tiền ', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '1000000', 'lhc2.yourcompany@gmail.com', '9387987100 (vcb)', '0966306259'),
(91, 'phuoc-hau', '9. Phước Hậu', '0706807831', '100041208168322', 'Trung Gian - Mua Bán - Đổi Tiền ', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info <span class=\"Apple-converted-space\"> </span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '777777', '0', '0001338956474', '0706807831'),
(92, '10-nguyen-luong', '10. Nguyên Lương', '0327560040', '100003882219005', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '3000000', '0', '0327560040', '0327560040'),
(93, '11-trong-nguyen', '11. Trọng Nguyễn ', '0355205304', '100076126041987', 'Trung Gian - Mua Bán - Đổi Tiền ', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '345678', '0', '0 ', '0355205304'),
(94, '12-ngo-trieu-cuong', '12. Ngô Triệu Cường', '0858847606', '100066541494923', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '222222', '0', '0858847606', '0858847606'),
(95, '13-le-cong-phat', '13. Lê Công Phát', '0968673803', '100052358859448', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '333333', 'phatdeeptry15@gmail.com', 'MB BANK : 0337553293', '0968673803'),
(96, '14-nguyen-duc-duy', '14. Nguyễn Đức Duy', '0966080507', '100051365842224', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '2000000', '0', '8886306072007', '0966080507'),
(97, '15-an-dayy', '15. Ân Đâyy', '0964387126', '100012570542787', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '666666', '0', 'Mbbank : 0964387126', '0776889253'),
(98, '16-leiry-hieu-le', '16. LeiRy Hiếu Lê', '0838897716', '100041928847555', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '888888', '0', '0838897716', '0838897716'),
(99, '17-kieu-trung-tin', '17. Kiều Trung Tín', '0387852873', '100006510001772', 'Trung Gian - Mua Bán - Đổi Tiền ', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '777777', '0', 'MB BANK : 1510200500000  ', '0387852873'),
(100, '18-huynh-tan-dat', '18. Huỳnh Tấn Đạt', '0368948825', '100000127245509', 'Trung Gian - Mua Bán - Đổi Tiền', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '100000', '0', '1088888888088', '0368948825'),
(101, '19-tienn', '19. Tienn ', '0937599687', '100071695158716', 'Trung Gian - Mua Bán - Đổi Tiền ', 'Giao Dịch Viên MMO Uy Tín :', '<p class=\"p1\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; font-stretch: normal; font-size: 17px; line-height: normal; -webkit-tap-highlight-color: rgba(26, 26, 26, 0.3); -webkit-text-size-adjust: auto;\"><span class=\"s1\" style=\"font-family: UICTFontTextStyleBody;\">Hồ sơ này đã được chứng nhận uy tín bởi tranhluadao.info&nbsp;<span class=\"Apple-converted-space\">&nbsp;</span>Mọi giao dịch sẽ được tranhluadao.info chịu trách nhiệm và hoàn tiền nếu có rủi ro xảy ra trong lúc giao dịch đến hồ sơ này.</span></p>', '123000', '0', 'Chưa có !', '0937599687');

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
(176, 'Giao Dịch Viên MMO Uy Tín :'),
(178, 'Quản Trị Viên '),
(179, 'Admin');

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
(980, 'HACK', '', '', '', '1'),
(981, 'HACK', 'leduchoangphuc2504', '', 'phucok', '1'),
(982, 'HACK', 'leduchoangphuc2504', '', 'phucok', '1'),
(983, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(984, 'HACK', '', '', '', '1'),
(985, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(986, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(987, 'HACK', 'Ahihingocminh', '', 'minhtn2007', '1'),
(988, 'HACK', 'admin', '', 'ccc', '1'),
(989, 'HACK', '', '', '', '1'),
(990, 'HACK', 'admin', '', 'minh', '1'),
(991, 'HACK', 'admin', '', 'minh', '1'),
(992, 'HACK', '', '', '', '1'),
(993, 'HACK', '', '', '', '1'),
(994, 'HACK', 'admin', '', 'minh', '1'),
(995, 'HACK', '', '', '', '1'),
(996, 'HACK', 'admin@', '', 'admin@lequyphu', '1'),
(997, 'HACK', 'admin@', '', 'admin@lequyphu', '1'),
(998, 'HACK', 'admin', '', 'vinh', '1'),
(999, 'HACK', 'admin', '', 'admin123@', '1'),
(1000, 'HACK', '', '', '', '1'),
(1001, 'HACK', '', '', '', '1'),
(1002, 'HACK', '', '', '', '1'),
(1003, 'HACK', '', '', '', '1'),
(1004, 'HACK', '', '', '', '1'),
(1005, 'HACK', '', '', '', '1'),
(1006, 'HACK', '', '', '', '1'),
(1007, 'HACK', '', '', '', '1'),
(1008, 'HACK', '', '', '', '1'),
(1009, 'HACK', '', '', '', '1'),
(1010, 'HACK', 'admin@', '', 'admin@123', '1'),
(1011, 'HACK', 'admin@', '', 'admin@123', '1'),
(1012, 'HACK', 'admin', '', 'admin@123', '1'),
(1013, 'HACK', 'admin', '', 'admin123@', '1'),
(1014, 'HACK', '', '', '', '1'),
(1015, 'HACK', '', '', '', '1'),
(1016, 'HACK', '', '', '', '1'),
(1017, 'HACK', '', '', '', '1'),
(1018, 'HACK', '', '', '', '1'),
(1019, 'HACK', '', '', '', '1'),
(1020, 'HACK', 'admin', '', 'admin123@', '1'),
(1021, 'HACK', '', '', '', '1'),
(1022, 'HACK', 'admin', '', 'admin123@', '1'),
(1023, 'HACK', '', '', '', '1'),
(1024, 'HACK', '', '', '', '1'),
(1025, 'HACK', '', '', '', '1'),
(1026, 'HACK', 'admin', '', 'admin@123', '1'),
(1027, 'HACK', 'admin', '', 'admin123@', '1'),
(1028, 'HACK', '', '', '', '1'),
(1029, 'HACK', '', '', '', '1'),
(1030, 'HACK', '', '', '', '1'),
(1031, 'HACK', '', '', '', '1'),
(1032, 'HACK', '', '', '', '1'),
(1033, 'HACK', '', '', '', '1'),
(1034, 'HACK', 'admin', '', 'admin123@', '1'),
(1035, 'HACK', '', '', '', '1'),
(1036, 'HACK', '', '', '', '1'),
(1037, 'HACK', '', '', '', '1'),
(1038, 'HACK', '', '', '', '1'),
(1039, 'HACK', '', '', '', '1'),
(1040, 'HACK', '', '', '', '1'),
(1041, 'HACK', 'admin', '', 'admin123@', '1'),
(1042, 'HACK', '', '', '', '1'),
(1043, 'HACK', '', '', '', '1'),
(1044, 'HACK', '', '', '', '1'),
(1045, 'HACK', '', '', '', '1'),
(1046, 'HACK', '', '', '', '1'),
(1047, 'HACK', '', '', '', '1'),
(1048, 'HACK', '', '', '', '1'),
(1049, 'HACK', '', '', '', '1'),
(1050, 'HACK', '', '', '', '1'),
(1051, 'HACK', '', '', '', '1'),
(1052, 'HACK', '', '', '', '1'),
(1053, 'HACK', '', '', '', '1'),
(1054, 'HACK', 'admin', '', 'admin123@', '1'),
(1055, 'HACK', '', '', '', '1'),
(1056, 'HACK', '', '', '', '1'),
(1057, 'HACK', '', '', '', '1');

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
(1, '/img/cover.png', 'https://tranhluadao.info/', '/upload/favicon_3521.png', 'https://i.imgur.com/7qwJFeq.png', 'TRANHLUADAO.INFO', 'TRANHLUADAO.INFO | nơi tố các những kẻ lừa đảo đang lộng hành trên mạng xã hội', 'https://www.facebook.com/maxius.coder', '0334955115');

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
(1, 'ABCXYZ', 'admin', 'admin123@', '1'),
(2, 'ABCXYZ', 'admin', 'admin123@', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT cho bảng `ctv`
--
ALTER TABLE `ctv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1058;

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
