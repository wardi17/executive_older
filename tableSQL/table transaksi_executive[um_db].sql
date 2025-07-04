USE [um_db]
GO

/****** Object:  Table [dbo].[transaksi_executive]    Script Date: 6/19/2025 4:40:03 PM ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[transaksi_executive](
	[subject] [varchar](300) NULL,
	[pencetus] [varchar](150) NULL,
	[ket_pengirim] [varchar](300) NULL,
	[tanggal] [datetime] NULL,
	[jam] [varchar](5) NULL,
	[id_eo] [varchar](50) NULL,
	[from_email] [varchar](150) NULL,
	[to_email] [varchar](300) NULL,
	[cc_email] [varchar](300) NULL,
	[importance] [varchar](50) NULL,
	[divisi] [varchar](50) NULL,
	[jenis_eo] [varchar](50) NULL,
	[catatan] [varchar](300) NULL,
	[image1] [varchar](150) NULL,
	[image2] [varchar](150) NULL,
	[image3] [varchar](150) NULL,
	[image4] [varchar](150) NULL,
	[user_id] [varchar](50) NULL,
	[tgl_upload] [datetime] NULL,
	[posting] [int] NULL,
	[tgl_posting] [datetime] NULL,
	[user_posting] [varchar](50) NULL
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[transaksi_executive] ADD  CONSTRAINT [DF_transaksi_executive_posting]  DEFAULT (0) FOR [posting]
GO


