<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> '다음 모듈이 설치되었습니다.',
	'DESC_MODULES_QUEUED'						=> '다음 모듈의 설치 준비가 되었습니다.',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> '그룹을 결정할수 없습니다.',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> '소유주를 결정할수 없습니다.',
	'ERR_UW_CONFIG_WRITE'						=> '정보의 신규버전과 config.php 전송 오류가 발생하였습니다.',
	'ERR_UW_CONFIG'								=> 'config.php 파일을 쓰기가능하게 만든후 이페이지를 다시 시도하십시오',
	'ERR_UW_DIR_NOT_WRITABLE'					=> '쓰기 가능한 디렉토리가 아닙니다.',
	'ERR_UW_FILE_NOT_COPIED'					=> '파일이 복사되지 않았습니다.',
	'ERR_UW_FILE_NOT_DELETED'					=> '문제 제거 패키지',
	'ERR_UW_FILE_NOT_READABLE'					=> '읽을수 없는 파일입니다.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> '이동하거나 쓰기 가능한 파일이 아닙니다.',
	'ERR_UW_FLAVOR_2'							=> '특색 업그레이드 중입니다.',
	'ERR_UW_FLAVOR'								=> 'SugarCRM 시스템 특색',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log가 새로 쓰여지거나 만들어지지 않았습니다. SugarCRM 디렉토리의 허용치를 수정하십시오.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_가 1이상의 가치를 초과 설정하였습니다. 이를  php.ini 에서 변경한후 웹서버를 다시 시작하십시오.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM MySQL version 4.1.2 또는 최신 버전',
	'ERR_UW_OCI8_VERSION'				        => '귀하의 Oracle버전은 Sugar에 의해 지원되지 않습니다. Sugar 어플리케이션에 적합한 버전을 설치해야 합니다. 지원된 Oracle버전을 위한 발표 노트에 있는 Compatibility Matrix 에 문의하십시오.',
	'ERR_UW_NO_FILE_UPLOADED'					=> '파일을 명시하거나 다시 시도해 주십시오.',
	'ERR_UW_NO_FILES'							=> '오류가 발생했습니다. 확인할 파일이 발견되지 않았습니다.',
	'ERR_UW_NO_MANIFEST'						=> '적하 목록에서 zip파일을 찾을수 없습니다. 진행할수 없습니다.',
	'ERR_UW_NO_VIEW'							=> '유효하지 않는 창이 명시되었습니다.',
	'ERR_UW_NO_VIEW2'							=> '보기가 정의되지 않았습니다. 이 페이지를 보려면 관리자 홈에 접속하십시오.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> '유효하지 않은 전송입니다.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> '임시 디렉토리를 만들수 없습니다. 파일 허용를 확인하십시오.',
	'ERR_UW_ONLY_PATCHES'						=> '이 페이지의 부분마을 전송할수 있습니다.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> '비행전 확인중 오류가 발생했습니다.',
	'ERR_UW_UPLOAD_ERR'							=> '파일 전송중 오류가 발생했습니다. 다시 시도해 주십시오.',
	'ERR_UW_VERSION'							=> 'SugarCRM 시스템 버전:',
    'ERR_UW_WRONG_TYPE'							=> '이 페이지는 실행할수 없습니다.',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => '전송된 파일이 php.ini에 명시된 upload_max_filesize 지시를 초과했습니다.',
													2 => '전송된 파일이 HTML 양식에 명시된 MAX_FILE_SIZE 지시를 초과했습니다.',
													3 => '파일이 부분적으로 전송되었습니다.',
													4 => '파일이 전송되지 않았습니다.',
													5 => '알수없는 오류',
													6 => '임시 폴더가 없습니다.',
													7 => '디스크에 파일쓰기가 실패했습니다.',
													8 => '확장에 의해 파일 전송이 중지되었습니다.',
),

    'ERROR_HT_NO_WRITE'                         => '파일에 쓸수 없습니다.',
    'ERROR_MANIFEST_TYPE'                       => '현재 파일이 반드시 패키지형식을 지정해야합니다.',
    'ERROR_PACKAGE_TYPE'                        => '현재 파일이 확인되지 않은 패키지형식을 포함하고 있습니다.',
    'ERROR_VERSION_INCOMPATIBLE'                => '전송된 파일이 Sugar버전에 적용할수 없습니다.',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => '전송된 파일은 Sugar의 프로페셔널, 엔터프라이즈, 얼티메이트 에디션에 적용할 수 없습니다.%s',

    'ERROR_UW_CONFIG_DB'                        => 'db에 %의 구성 var (key %s, value %s) 저장 오류',
    'ERR_NOT_ADMIN'                             => "관리자에 승인되지 않은 접근입니다",
    'ERR_NO_VIEW_ACCESS_REASON'                 => '이 페이지에 접근할 수 없습니다',

    'LBL_BUTTON_BACK'							=> '뒤로',
	'LBL_BUTTON_CANCEL'							=> '취소',
	'LBL_BUTTON_DELETE'							=> '패키지 삭제',
	'LBL_BUTTON_DONE'							=> '완료',
	'LBL_BUTTON_EXIT'							=> '나가기',
	'LBL_BUTTON_INSTALL'						=> '비행전 업그레이드',
	'LBL_BUTTON_NEXT'							=> '다음',
	'LBL_BUTTON_RECHECK'						=> '재확인',
	'LBL_BUTTON_RESTART'						=> '다시시작',

	'LBL_UPLOAD_UPGRADE'						=> '업그레이드 패키지 전송',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> '전송 파일이 발견되지 않았습니다.',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> '예비 파일',
	'LBL_UW_BACKUP_FILES_EXIST'					=> '이 업그레이드에서 예비파일을 다음에서 발견할수 있습니다.',
	'LBL_UW_BACKUP'								=> '예비 파일',
	'LBL_UW_CANCEL_DESC'						=> '업그레이드가 취소되었습니다. 전송중이던 복사된 파일이나 업그레이드 파일이 삭제되었습니다.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> '문자 설정개요 변경',
	'LBL_UW_CHECK_ALL'							=> '모두 선택하기',
	'LBL_UW_CHECKLIST'							=> '업그레이드 단계',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "덮어쓰여진 파일의 예비파일은  다음 디렉토리 존재합니다.",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "다음 파일을 수동으로 통합합니다.",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> '업그레이드 진행:수동 파일 통합',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> '이 파일을 통합하려면 가장 익숙한 다른 방법을 사용하십시오. 이 과정이 완료될떄까지 귀하의 SugarCRM 설치는 확인되지 않는 상태에 있으며 업그레이드도 완료되지 않습니다.',
	'LBL_UW_COMPLETE'							=> '완료',
	'LBL_UW_CONTINUE_CONFIRMATION'              => '이 Sugar 신규 버전은 새 라이센트 계약을 포함합니다. 계속 하시겠습니까?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> '전체 시스템 설정 필수항목이 채워졌습니다.',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP설정:참조사항에 따른 전화상담 시간',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL 모듈',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP 모듈',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings 모듈',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_한계 초과',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP 설정:메모리 한계',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP 설정:흐름',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL 서버 & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> '최소 MySQL 버전',
    'LBL_UW_COMPLIANCE_DB'                      => '최소 데이타 버전',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'php.ini 위치',
    'LBL_UW_COMPLIANCE_PHP_VERSION'             => 'PHP 버전',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP설정:안전 모드',
	'LBL_UW_COMPLIANCE_TITLE'					=> '서버 설정 확인',
	'LBL_UW_COMPLIANCE_TITLE2'					=> '발견된 설정',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML 분석',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip 지원',

	'LBL_UW_COPIED_FILES_TITLE'					=> '파일이 성공적으로 복사되었습니다.',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> '고객 테이블 개요 변경',

	'LBL_UW_DB_CHOICE1'							=> '업그레이드 마법사 SQL 실행',
	'LBL_UW_DB_CHOICE2'							=> '수동 SQL 문의사항',
	'LBL_UW_DB_INSERT_FAILED'					=> '삽입 실패:비교된 결과가 다릅니다.',
	'LBL_UW_DB_ISSUES_PERMS'					=> '데이타베이스 혜택',
	'LBL_UW_DB_ISSUES'							=> '데이타베이스 쟁점',
	'LBL_UW_DB_METHOD'							=> '데이타베이스 업데이트 방법',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> '테이블 [table] 변경 컬럼 [column] 추가',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> '테이블 [table] 변경 컬럼 [column] 변경',
	'LBL_UW_DB_NO_CREATE'						=> '테이블 [table] 작성',
	'LBL_UW_DB_NO_DELETE'						=> '[table]에서 삭제',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> '테이블 [table] 변경 컬럼 [column] 드롭',
	'LBL_UW_DB_NO_DROP_TABLE'					=> '테이블 [table] 드롭',
	'LBL_UW_DB_NO_ERRORS'						=> '가능한 전체 혜택',
	'LBL_UW_DB_NO_INSERT'						=> '[table]로 삽입',
	'LBL_UW_DB_NO_SELECT'						=> '[table]에서 [x] 선택',
	'LBL_UW_DB_NO_UPDATE'						=> '[table] 업데이트',
	'LBL_UW_DB_PERMS'							=> '필요한 혜택',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> '다음의 업그레이트 패키지가 설치되었습니다.',
	'LBL_UW_END_DESC'							=> '시스템이 업그레이드 되었습니다.',
	'LBL_UW_END_DESC2'							=> '파일 통합이나 SQL 문의사항과 같은 단계의 수동진행을 선택했다면 지금 실행하십시오. 이 단계가 완성될때까지 귀하의 시스템은 불안정 상태에 있습니다.',
	'LBL_UW_END_LOGOUT_PRE'						=> '업그레이드가 완료되었습니다.',
	'LBL_UW_END_LOGOUT_PRE2'					=> '업그레이드 마법사 나가기는 완료 버튼을 클릭하십시오.',
	'LBL_UW_END_LOGOUT'							=> '업그레이드 마법사를 이용해 다른 업그레이드 패키지를 적용하려면 실행전 다시 로그인하십시오.',
	'LBL_UW_END_LOGOUT2'						=> '로그아웃',
	'LBL_UW_REPAIR_INDEX'						=> '데이타베이스 실행을 향상시키려면 Repair Index 스크립트를 실행하십시오.',

	'LBL_UW_FILE_DELETED'						=> "제거되었습니다.",
	'LBL_UW_FILE_GROUP'							=> '그룹',
	'LBL_UW_FILE_ISSUES_PERMS'					=> '파일 허용',
	'LBL_UW_FILE_ISSUES'						=> '파일 쟁점',
	'LBL_UW_FILE_NEEDS_DIFF'					=> '수동diff를 요하는 파일',
	'LBL_UW_FILE_NO_ERRORS'						=> '모든 쓰기가능한 파일',
	'LBL_UW_FILE_OWNER'							=> '소유자',
	'LBL_UW_FILE_PERMS'							=> '허용',
	'LBL_UW_FILE_UPLOADED'						=> '전송되었습니다.',
	'LBL_UW_FILE'								=> '파일명:',
	'LBL_UW_FILES_QUEUED'						=> '다음 업그레이드 패키지가 설치 준비되었습니다.',
	'LBL_UW_FILES_REMOVED'						=> "다음 파일이 시스템에서 제거됩니다.",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "업그레이드 패키지를 전송하려면 다음 버튼을 클릭하십시오.",
	'LBL_UW_FROZEN'								=> '계속하기전 패키지 전송',
	'LBL_UW_HIDE_DETAILS'						=> '세부사항 숨기기',
	'LBL_UW_IN_PROGRESS'						=> '진행중',
	'LBL_UW_INCLUDING'							=> '포함',
	'LBL_UW_INCOMPLETE'							=> '완료되지 않음',
	'LBL_UW_INSTALL'							=> '파일 설치',
	'LBL_UW_MANUAL_MERGE'						=> '파일 통합',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "모듈의 설치해제가 준비되었습니다.  진행하려면 확정버튼을 클릭하십시오.",
	'LBL_UW_MODULE_READY'						=> "모듈의 설치가 준비되었습니다. 진행하려면 확정버튼을 클릭하십시오.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> '기록된 업그레이드가 없습니다.',
	'LBL_UW_NONE'								=> '없음',
	'LBL_UW_NOT_AVAILABLE'						=> '사용 불가',
	'LBL_UW_OVERWRITE_DESC'						=> "전체 변경된 파일이 주문형 코드와 만들어진 템플릿 변경을 포함해 덮어쓰기 됩니다.  계속하시겠습니까?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> '모든 파일 덮어쓰기',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> '수동 통합-전체 유지',
	'LBL_UW_OVERWRITE_FILES'					=> '통합 방법',
	'LBL_UW_PATCH_READY'						=> '패치(임시 오류수정)의 진행 준비가 완료되었습니다. 업그레이드 진해을 완료하려면 아래 확정 버튼을 클릭하십시오.',
	'LBL_UW_PATCH_READY2'						=> '알림:주문된 지면배치 발견<br />다음 파일은 신규필드나 작업실을 통해 지면배치가 수정된 화면을 포함합니다. 설치하려는 패치도 변경된 파일을 포함합니다. 각각의 파일에<br /><br />-초기설정 체크박스를 표시하지 않음으로 버전을 유지합니다. 패치 수정은 무시됩니다. 또는<br />-체크박스를 선택하여 업그레이드를 수락합니다.  현 지면배치는 작업실을 통해 재 적용되어야 합니다.',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> '수동 통합을 위한 신규 과제아이템 만들기',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> '비행전 확인',
	'LBL_UW_PREFLIGHT_DIFF'						=> '차별화',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> '수동 통합 알림을 위해 본인수신 이메일을 보내시겠습니까?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> '아래 목록의 파일이 수정되었습니다. 수동 통합이 필요한 아이템은 확인해제하십시오. 발견된 지면배치 변경은 자동으로 확인해제됩니다;덮어쓰여질 항목에 확인표시합니다.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> '수동 파일통합이 필요하지 않습니다.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> '필요하지 않습니다.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> '자동 저장된 파일',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> '전체 예비비행이 통과했습니다.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> '업그레이드된 파일을 시스템에 복사하려면 다음 버튼을 클릭하십시오.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '노트:나머지 업그레이드 과정은 필수이며 다음 버튼을 클릭하면 진행을 완료해야합니다. 진행을 원하지 않으면 취소 버튼을 클릭하십시오.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> '전체 파일 토글',

	'LBL_UW_REBUILD_TITLE'						=> '결과 다시 만들기',
	'LBL_UW_SCHEMA_CHANGE'						=> '개요 변경',

	'LBL_UW_SHOW_COMPLIANCE'					=> '발견된 설정 보이기',
	'LBL_UW_SHOW_DB_PERMS'						=> '사라진 데이타베이스 허가 보이기',
	'LBL_UW_SHOW_DETAILS'						=> '세부사항 보이기',
	'LBL_UW_SHOW_DIFFS'							=> '수동 통합이 필요한 파일 보이기',
	'LBL_UW_SHOW_NW_FILES'						=> '올바르지 않은 허가의 파일 보이기',
	'LBL_UW_SHOW_SCHEMA'						=> '개요 변경 스크립트 보이기',
	'LBL_UW_SHOW_SQL_ERRORS'					=> '좋지않은 문의사항 보이기',
	'LBL_UW_SHOW'								=> '보이기',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> '생략된 파일',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> '생략된 파일 덮어쓰기-수동 통합 선택',
	'LBL_UW_SQL_RUN'							=> 'SQL 수동 실행시 확인',
	'LBL_UW_START_DESC'							=> 'Sugar 예시의 업그레이드를 마법사가 도와줍니다.',
	'LBL_UW_START_DESC2'						=> '노트: 귀하의 제작 시스템 업그레이드전 Sugar 데이타베이스와 시스템 파일을 백업하도록 권장합니다. 그리고 먼저 제작 시스템의 복제된 예시에서 테스트 업그레이드의 실행을 강력히 권장합니다.',
	'LBL_UW_START_DESC3'						=> '시스템의 업그레이드 준비를 확인하도록 다음 버튼을 눌러 실행합니다. 이는 파일 허가, 데이타 특권과 서버 설정을 포함합니다.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> '신규 업그레이드 마법사가 업그레드를 시작합니다.계속해서 업그레이드를 진행하십시오.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> '새 업그레이드 마법사에 오신것을 환영합니다.',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> '확인중입니다. 잠시만 기다려주십시오. 30초정도 소요될수 있습니다.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> '확인할 관련파일을 찾고 있습니다.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> '파일',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> '발견했습니다.',

	'LBL_UW_TITLE_CANCEL'						=> '취소',
	'LBL_UW_TITLE_COMMIT'						=> '업그레이드를 약속합니다.',
	'LBL_UW_TITLE_END'							=> '보고 받기',
	'LBL_UW_TITLE_PREFLIGHT'					=> '비행전 확인',
	'LBL_UW_TITLE_START'						=> '환영합니다',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> '시스템 확인',
	'LBL_UW_TITLE_UPLOAD'						=> '패키지 전송',
	'LBL_UW_TITLE'								=> '업그레이드 마법사',
	'LBL_UW_UNINSTALL'							=> '설치해제',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> '라이센트 수락',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> '라이센스 전환',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => '업그레이드된/주문변경된 모듈',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => '다음은 주문변경후 저장되어진 모듈입니다.',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => '다음은 작업실에서 주문변경되고 업그레이드된 모듈입니다.',

	'LBL_START_UPGRADE_IN_PROGRESS'             => '진행 시작되었습니다.',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => '시스템 확인이 진행중입니다.',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => '라이센스 확인중입니다.',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => '예비비행 확인중입니다.',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => '파일 복사중입니다.',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => '약속한 업그레이드가 진행중입니다.',
    'LBL_UW_COMMIT_DESC'						=> '추가 스크립트 업그레이드를 위해 다음 버튼 클릭하십시오',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> '스크립트 업그레이드 중입니다.',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> '개요 업그레이드 중입니다.',
	'LBL_UPGRADE_IN_PROGRESS'                   => '진행중입니다.',
	'LBL_UPGRADE_TIME_ELAPSED'                  => '시간이 경과하였습니다.',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> '취소와 비우기 업그레이드 중입니다.',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => '업그레이드에 일정시간이 소요될수 있습니다.',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => '전송확인이 진행중입니다.',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> '업그레이드 패키지 전송중입니다.',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Sugar 에서 depricated 451 Schema를 내리시겠습니까?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> '업그레이드 마법사가 old 451 schema 내립니다.',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> '수동 드롭 스키마 포스트 업그레이드',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> '예전 개요 내리기 방법',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> '내릴수 있는 예전 개요 보이기',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => '생략된 문의사항',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => '귀하의 PHP버전은 Sugar에 의해 지원되지 않습니다. Sugar어플리케이션에 적합한 버전을 설치해야 합니다. 지원되는 PHP버전 발표노트의 Compatibility Matrix과 문의하시기 바랍니다. 귀하의 버전은',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'PHP 역방향 적합성 모드가 작동중입니다. 계속 진행하려면 zend.ze1_compatibility_mode 를 작동을 중지하십시오.',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => '액션',
    'LBL_ML_CANCEL'             => '취소',
    'LBL_ML_COMMIT'=>'약속됨',
    'LBL_ML_DESCRIPTION' => '설명:',
    'LBL_ML_INSTALLED' => '설치된 날짜',
    'LBL_ML_NAME' => '이름',
    'LBL_ML_PUBLISHED' => '발표 날짜',
    'LBL_ML_TYPE' => '유형',
    'LBL_ML_UNINSTALLABLE' => '설치 불가능',
    'LBL_ML_VERSION' => '버전',
	'LBL_ML_INSTALL'=>'설치',
	'LBL_MODULE_NAME' => '업그레이드 마법사',
	'LBL_MODULE_NAME_SINGULAR' => '업그레이드 마법사',
	'LBL_UPLOAD_SUCCESS' => '패키지 업그레이드가 성공적으로 전송되었습니다. 최종 확인을 위한 다음 버튼을 클릭하십시오,',
	'LBL_UW_TITLE_LAYOUTS' => '지면배치 확인',
	'LBL_LAYOUT_MODULE_TITLE' => '지면 배치',
	'LBL_LAYOUT_MERGE_DESC' => '업그레이드의 과정에서 추가된 신규 필드를 사용할수 있으며 기존 모듈 지면배치에 자동 추가될수 있습니다. 신규 필드에 대한 보다더 자세한 내용은 업그레이드인 버전의 발매 노트를 참조하십시오,<br />신규 필드의 추가를 원치 않으시면 모듈을 확인해제하고 지면배치는 변경되지 않습니다. 필드는 업그레이드 후에 작업실에서 사용할수 있습니다.',
	'LBL_LAYOUT_MERGE_TITLE' => '변경사항을 확인하고 업그레이드 완료를 위해 다음 버튼을 클릭하십시오.',
	'LBL_LAYOUT_MERGE_TITLE2' => '업그레이드 완료를 위해 다음 버튼을 클릭하십시오',
	'LBL_UW_CONFIRM_LAYOUTS' => '지면배치 확인',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => '지면배치 결과 확인',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => '다음 지면배치가 성공적으로 통합되었습니다.',
	'LBL_SELECT_FILE' => '파일 선택하기',
	'LBL_LANGPACKS' => '언어상자' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => '모듈 올리기' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => '패치 업그레이드' /*for 508 compliance fix*/,
	'LBL_THEMES' => '테마:' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => '작업흐름' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => '업그레이드' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => '진행중입니다' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => '세계전체에서 보기가능',
);
