
create table tb_OrgInfo
(
OrgId int primary key,
OrgName nvarchar(500),
OrgEstablished nvarchar(20),
OrgContact nvarchar(20),
OrgEmail nvarchar(150),
OrgPanNo nvarchar(50),
OrgWebsite nvarchar(500),
OrgAddress nvarchar(800),
OrgMotto nvarchar(max),
OrgLogo nvarchar(500),
OrgStanp nvarchar(500),
OrgMapIFrame nvarchar(max),
OrgGoogleMapLink nvarchar(max),
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime,
)

create table tb_Faculty
(
FacId bigint primary key,
FacName nvarchar(500),
FacAlias nvarchar(50),
FacDescription nvarchar(max),
FacActive bit,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime,
FacGuid nvarchar(500)
)

create table tb_UserGroup
(
	UGrpId bigint primary key,
	UGrpName nvarchar(500),
	UGrpAlias nvarchar(50),
	UGrpDescription nvarchar(max),
	UGrpForRegistration bit,
	UGrpIsInterCollege bit,
	CreatedBy nvarchar(10),
    CreatedDate smalldatetime,
    ModifiedBy nvarchar(10),
    ModifiedDate smalldatetime,
    UGrpGuid nvarchar(500)
)

create table tb_User
(
UsrId bigint primary key,
UsrGroup bigint,
UsrImage nvarchar(200),
UsrFullName nvarchar(200),
UsrMiddleName nvarchar(200),
UsrLastName nvarchar(200),
UsrDateOfBirth smalldatetime,
UsrAddress nvarchar(1000),
UsrCity nvarchar(100),
UsrState nvarchar(100),
UsrCountry nvarchar(100),
UsrContact nvarchar(100),
UsrEmail nvarchar(100),
UsrPassword varbinary,
UsrIdentityfication nvarchar(500),
UsrFaculty bigint,
UsrIsVerified bit,
UsrActive bit,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime,
UsrGuid nvarchar(500)
)

create table tb_EventGroup
(
EGrpId bigint primary key,
EGrpName nvarchar(500),
EGrpAlias nvarchar(50),
EGrpDescription nvarchar(max),
EGrpActive bit,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime,
EGrpGuid nvarchar(500)
)

create table tb_EventGrpAndUserGrpMapping
(
EGrpId bigint,
UGrpId bigint
)

create table tb_EventPropertyType
(
EPropTId int primary key,
EPropTName nvarchar(250),
EPropTActive bit
)

create table tb_EventProperty
(
EPropId bigint primary key,
EPropName nvarchar(500),
EPropAlias nvarchar(50),
EPropActive bit,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime,
EPropGuid nvarchar(500)
)

create table tb_Event
(
EvtId bigint primary key,
EvtName nvarchar(150),
EvtShortDescription nvarchar(500),
EvtFullDescription nvarchar(max),
EvtMaxParticipants int,
EvtGroup bigint,
EvtIsApproved bit,
EvtApprovedBy nvarchar(10),
EvtApprovedDate smalldatetime,
EvtActive bit,
EvtCost decimal(18,2),
EvtShowOnSlider bit,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime,
EvtGuid nvarchar(500)
)

create table tb_EventPropertyMapping
(
EvtId bigint,
EvtPropId bigint,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime
)

create table tb_EventScheduling
(
EvtId bigint,
EvtVenue nvarchar(1000),
EvtDate date,
EvtTimeFrom time,
EvtTimeTo time,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime
)

create table tb_EventImage
(
EvtId bigint,
EvtImage nvarchar(500),
EvtIsPrimary bit,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime,
)

create table tb_QueventModule
(
QModId int primary key,
QModName nvarchar(500),
QModActive bit
)

create table tb_UsrGroupWiseModMapping
(
Ukid bigint primary key,
UsrGrpId bigint,
UsrGrpModId bigint,
UsrGrpModCanView bit,
UsrGrpModCanCreate bit,
UsrGrpModCanUpdate bit,
UsrGrpModCanDelete bit,
CreatedBy nvarchar(10),
CreatedDate smalldatetime,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime
)

create table tb_PaymentPartner
(
PmtPartId bigint primary key,
PmtPartName nvarchar(500),
PmtPartAlias nvarchar(50),
PmtPartCDN nvarchar(500),
PmtPartDescription nvarchar(1000),
PmtPartActive bit,
ModifiedBy nvarchar(10),
ModifiedDate smalldatetime,
PmtPartGuid nvarchar(500)
)

create table tb_PmtPartEsewa
(
OrgEsewaId nvarchar(500),
OrgEsewaSCD nvarchar(500),
OrgEsewaSecretKey nvarchar(500),
OrgEsewaSuccessUrl nvarchar(500),
OrgEsewaFailUrl nvarchar(500),
OrgEsewaGatewayUrl nvarchar(500),
OrgEsewaCheckUrl nvarchar(500),
)

create table tb_PmtPartKhalti
(
OrgKhaltiId nvarchar(500),
OrgKhaltiPublicKey nvarchar(500),
OrgKhaltiSecretKey nvarchar(500),
OrgKhaltiGatewayUrl nvarchar(500),
OrgKhaltiCheckUrl nvarchar(500),
OrgKhaltiReturnUrl nvarchar(500),
)