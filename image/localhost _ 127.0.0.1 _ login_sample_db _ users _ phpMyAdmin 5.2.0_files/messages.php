var Messages = {"strConfirm":"Confirm","strDoYouReally":"Do you really want to execute \"%s\"?","strDropDatabaseStrongWarning":"You are about to DESTROY a complete database!","strDatabaseRenameToSameName":"Cannot rename database to the same name. Change the name and try again","strDropTableStrongWarning":"You are about to DESTROY a complete table!","strTruncateTableStrongWarning":"You are about to TRUNCATE a complete table!","strDeleteTableStrongWarning":"You are about to DELETE all the rows of the table!","strDeleteTrackingData":"Delete tracking data for this table?","strDeleteTrackingDataMultiple":"Delete tracking data for these tables?","strDeleteTrackingVersion":"Delete tracking data for this version?","strDeleteTrackingVersionMultiple":"Delete tracking data for these versions?","strDeletingTrackingEntry":"Delete entry from tracking report?","strDeletingTrackingData":"Deleting tracking data","strDroppingPrimaryKeyIndex":"Dropping Primary Key\/Index","strDroppingForeignKey":"Dropping Foreign key.","strOperationTakesLongTime":"This operation could take a long time. Proceed anyway?","strDropUserGroupWarning":"Do you really want to delete user group \"%s\"?","strConfirmDeleteQBESearch":"Do you really want to delete the search \"%s\"?","strConfirmNavigation":"You have unsaved changes; are you sure you want to leave this page?","strConfirmRowChange":"You are trying to reduce the number of rows, but have already entered data in those rows which will be lost. Do you wish to continue?","strDropUserWarning":"Do you really want to revoke the selected user(s) ?","strDeleteCentralColumnWarning":"Do you really want to delete this central column?","strDropRTEitems":"Do you really want to delete the selected items?","strDropPartitionWarning":"Do you really want to DROP the selected partition(s)? This will also DELETE the data related to the selected partition(s)!","strTruncatePartitionWarning":"Do you really want to TRUNCATE the selected partition(s)?","strRemovePartitioningWarning":"Do you really want to remove partitioning?","strResetReplicaWarning":"Do you really want to reset the replica (RESET REPLICA)?","strChangeColumnCollation":"This operation will attempt to convert your data to the new collation. In rare cases, especially where a character doesn't exist in the new collation, this process could cause the data to appear incorrectly under the new collation; in this case we suggest you revert to the original collation and refer to the tips at <a href=\"%s\" target=\"garbled_data_wiki\">Garbled Data<\/a>.<br><br>Are you sure you wish to change the collation and convert the data?","strChangeAllColumnCollationsWarning":"Through this operation, MySQL attempts to map the data values between collations. If the character sets are incompatible, there may be data loss and this lost data may <b>NOT<\/b> be recoverable simply by changing back the column collation(s). <b>To convert existing data, it is suggested to use the column(s) editing feature (the \"Change\" Link) on the table structure page. <\/b><br><br>Are you sure you wish to change all the column collations and convert the data?","strSaveAndClose":"Save & close","strReset":"Reset","strResetAll":"Reset all","strFormEmpty":"Missing value in the form!","strRadioUnchecked":"Select at least one of the options!","strEnterValidNumber":"Please enter a valid number!","strEnterValidLength":"Please enter a valid length!","strAddIndex":"Add index","strEditIndex":"Edit index","strRenameIndex":"Rename index","strAddToIndex":"Add %s column(s) to index","strCreateSingleColumnIndex":"Create single-column index","strCreateCompositeIndex":"Create composite index","strCompositeWith":"Composite with:","strMissingColumn":"Please select column(s) for the index.","strPreviewSQL":"Preview SQL","strSimulateDML":"Simulate query","strMatchedRows":"Matched rows:","strSQLQuery":"SQL query:","strYValues":"Y values","strEmptyQuery":"Please enter the SQL query first.","strHostEmpty":"The host name is empty!","strUserEmpty":"The user name is empty!","strPasswordEmpty":"The password is empty!","strPasswordNotSame":"The passwords aren't the same!","strRemovingSelectedUsers":"Removing Selected Users","strClose":"Close","strLock":"Lock","strUnlock":"Unlock","strLockAccount":"Lock this account.","strUnlockAccount":"Unlock this account.","strTemplateCreated":"Template was created.","strTemplateLoaded":"Template was loaded.","strTemplateUpdated":"Template was updated.","strTemplateDeleted":"Template was deleted.","strOther":"Other","strThousandsSeparator":",","strDecimalSeparator":".","strChartConnectionsTitle":"Connections \/ Processes","strIncompatibleMonitorConfig":"Local monitor configuration incompatible!","strIncompatibleMonitorConfigDescription":"The chart arrangement configuration in your browsers local storage is not compatible anymore to the newer version of the monitor dialog. It is very likely that your current configuration will not work anymore. Please reset your configuration to default in the <i>Settings<\/i> menu.","strQueryCacheEfficiency":"Query cache efficiency","strQueryCacheUsage":"Query cache usage","strQueryCacheUsed":"Query cache used","strSystemCPUUsage":"System CPU usage","strSystemMemory":"System memory","strSystemSwap":"System swap","strAverageLoad":"Average load","strTotalMemory":"Total memory","strCachedMemory":"Cached memory","strBufferedMemory":"Buffered memory","strFreeMemory":"Free memory","strUsedMemory":"Used memory","strTotalSwap":"Total swap","strCachedSwap":"Cached swap","strUsedSwap":"Used swap","strFreeSwap":"Free swap","strBytesSent":"Bytes sent","strBytesReceived":"Bytes received","strConnections":"Connections","strProcesses":"Processes","strB":"B","strKiB":"KiB","strMiB":"MiB","strGiB":"GiB","strTiB":"TiB","strPiB":"PiB","strEiB":"EiB","strNTables":"%d table(s)","strQuestions":"Questions","strTraffic":"Traffic","strSettings":"Settings","strAddChart":"Add chart to grid","strAddOneSeriesWarning":"Please add at least one variable to the series!","strNone":"None","strQuery":"SQL Query","strResumeMonitor":"Resume monitor","strPauseMonitor":"Pause monitor","strStartRefresh":"Start auto refresh","strStopRefresh":"Stop auto refresh","strBothLogOn":"general_log and slow_query_log are enabled.","strGenLogOn":"general_log is enabled.","strSlowLogOn":"slow_query_log is enabled.","strBothLogOff":"slow_query_log and general_log are disabled.","strLogOutNotTable":"log_output is not set to TABLE.","strLogOutIsTable":"log_output is set to TABLE.","strSmallerLongQueryTimeAdvice":"slow_query_log is enabled, but the server logs only queries that take longer than %d seconds. It is advisable to set this long_query_time 0-2 seconds, depending on your system.","strLongQueryTimeSet":"long_query_time is set to %d second(s).","strSettingsAppliedGlobal":"Following settings will be applied globally and reset to default on server restart:","strSetLogOutput":"Set log_output to %s","strEnableVar":"Enable %s","strDisableVar":"Disable %s","setSetLongQueryTime":"Set long_query_time to %d seconds.","strNoSuperUser":"You can't change these variables. Please log in as root or contact your database administrator.","strChangeSettings":"Change settings","strCurrentSettings":"Current settings","strChartTitle":"Chart title","strDifferential":"Differential","strDividedBy":"Divided by %s","strUnit":"Unit","strFromSlowLog":"From slow log","strFromGeneralLog":"From general log","strServerLogError":"The database name is not known for this query in the server's logs.","strAnalysingLogsTitle":"Analysing logs","strAnalysingLogs":"Analysing & loading logs. This may take a while.","strCancelRequest":"Cancel request","strCountColumnExplanation":"This column shows the amount of identical queries that are grouped together. However only the SQL query itself has been used as a grouping criteria, so the other attributes of queries, such as start time, may differ.","strMoreCountColumnExplanation":"Since grouping of INSERTs queries has been selected, INSERT queries into the same table are also being grouped together, disregarding of the inserted data.","strLogDataLoaded":"Log data loaded. Queries executed in this time span:","strJumpToTable":"Jump to Log table","strNoDataFoundTitle":"No data found","strNoDataFound":"Log analysed, but no data found in this time span.","strAnalyzing":"Analyzing\u2026","strExplainOutput":"Explain output","strStatus":"Status","strTime":"Time","strTotalTime":"Total time:","strProfilingResults":"Profiling results","strTable":"Table","strChart":"Chart","strAliasDatabase":"Database","strAliasTable":"Table","strAliasColumn":"Column","strFiltersForLogTable":"Log table filter options","strFilter":"Filter","strFilterByWordRegexp":"Filter queries by word\/regexp:","strIgnoreWhereAndGroup":"Group queries, ignoring variable data in WHERE clauses","strSumRows":"Sum of grouped rows:","strTotal":"Total:","strLoadingLogs":"Loading logs","strRefreshFailed":"Monitor refresh failed","strInvalidResponseExplanation":"While requesting new chart data the server returned an invalid response. This is most likely because your session expired. Reloading the page and reentering your credentials should help.","strReloadPage":"Reload page","strAffectedRows":"Affected rows:","strFailedParsingConfig":"Failed parsing config file. It doesn't seem to be valid JSON code.","strFailedBuildingGrid":"Failed building chart grid with imported config. Resetting to default config\u2026","strImport":"Import","strImportDialogTitle":"Import monitor configuration","strImportDialogMessage":"Please select the file you want to import.","strTableNameDialogMessage":"Please enter a valid table name.","strDBNameDialogMessage":"Please enter a valid database name.","strNoImportFile":"No files available on server for import!","strAnalyzeQuery":"Analyse query","strFormatting":"Formatting SQL\u2026","strNoParam":"No parameters found!","strGo":"Go","strCancel":"Cancel","strPageSettings":"Page-related settings","strApply":"Apply","strLoading":"Loading\u2026","strAbortedRequest":"Request aborted!!","strProcessingRequest":"Processing request","strRequestFailed":"Request failed!!","strErrorProcessingRequest":"Error in processing request","strErrorCode":"Error code: %s","strErrorText":"Error text: %s","strErrorConnection":"It seems that the connection to server has been lost. Please check your network connectivity and server status.","strNoDatabasesSelected":"No databases selected.","strNoTableSelected":"No table selected.","strNoAccountSelected":"No accounts selected.","strDroppingColumn":"Dropping column","strAddingPrimaryKey":"Adding primary key","strOK":"OK","strDismiss":"Click to dismiss this notification","strRenamingDatabases":"Renaming databases","strCopyingDatabase":"Copying database","strChangingCharset":"Changing charset","strNo":"No","strForeignKeyCheck":"Enable foreign key checks","strErrorRealRowCount":"Failed to get real row count.","strSearching":"Searching","strHideSearchResults":"Hide search results","strShowSearchResults":"Show search results","strBrowsing":"Browsing","strDeleting":"Deleting","strConfirmDeleteResults":"Delete the matches for the %s table?","MissingReturn":"The definition of a stored function must contain a RETURN statement!","strExport":"Export","NoExportable":"No routine is exportable. Required privileges may be lacking.","enum_columnVals":"Values for column %s","enum_newColumnVals":"Values for a new column","enum_hint":"Enter each value in a separate field.","enum_addValue":"Add %d value(s)","strImportCSV":"Note: If the file contains multiple tables, they will be combined into one.","strHideQueryBox":"Hide query box","strShowQueryBox":"Show query box","strEdit":"Edit","strDelete":"Delete","strNotValidRowNumber":"%d is not valid row number.","strBrowseForeignValues":"Browse foreign values","strNoAutoSavedQuery":"No previously auto-saved query is available. Loading default query.","strPreviousSaveQuery":"You have a previously saved query. Click Get auto-saved query to load the query.","strBookmarkVariable":"Variable %d:","pickColumn":"Pick","pickColumnTitle":"Column selector","searchList":"Search this list","strEmptyCentralList":"No columns in the central list. Make sure the Central columns list for database %s has columns that are not present in the current table.","seeMore":"See more","strAddPrimaryKey":"Add primary key","strPrimaryKeyAdded":"Primary key added.","strToNextStep":"Taking you to next step\u2026","strFinishMsg":"The first step of normalization is complete for table '%s'.","strEndStep":"End of step","str2NFNormalization":"Second step of normalization (2NF)","strDone":"Done","strConfirmPd":"Confirm partial dependencies","strSelectedPd":"Selected partial dependencies are as follows:","strPdHintNote":"Note: a, b -> d,f implies values of columns a and b combined together can determine values of column d and column f.","strNoPdSelected":"No partial dependencies selected!","strBack":"Back","strShowPossiblePd":"Show me the possible partial dependencies based on data in the table","strHidePd":"Hide partial dependencies list","strWaitForPd":"Sit tight! It may take few seconds depending on data size and column count of the table.","strStep":"Step","strMoveRepeatingGroup":"<ol><b>The following actions will be performed:<\/b><li>DROP columns %s from the table %s<\/li><li>Create the following table<\/li>","strNewTablePlaceholder":"Enter new table name","strNewColumnPlaceholder":"Enter column name","str3NFNormalization":"Third step of normalization (3NF)","strConfirmTd":"Confirm transitive dependencies","strSelectedTd":"Selected dependencies are as follows:","strNoTdSelected":"No dependencies selected!","strSave":"Save","strHideSearchCriteria":"Hide search criteria","strShowSearchCriteria":"Show search criteria","strColumnMax":"Column maximum:","strColumnMin":"Column minimum:","strHideFindNReplaceCriteria":"Hide find and replace criteria","strShowFindNReplaceCriteria":"Show find and replace criteria","strDisplayHelp":"<ul><li>Each point represents a data row.<\/li><li>Hovering over a point will show its label.<\/li><li>To zoom in, select a section of the plot with the mouse.<\/li><li>Click reset zoom button to come back to original state.<\/li><li>Click a data point to view and possibly edit the data row.<\/li><li>The plot can be resized by dragging it along the bottom right corner.<\/li><\/ul>","strHelpTitle":"Zoom search instructions","strInputNull":"<strong>Select two columns<\/strong>","strSameInputs":"<strong>Select two different columns<\/strong>","strDataPointContent":"Data point content","strIgnore":"Ignore","strCopy":"Copy","strX":"X","strY":"Y","strPoint":"Point","strPointN":"Point %d","strLineString":"Linestring","strPolygon":"Polygon","strGeometry":"Geometry","strInnerRing":"Inner ring","strOuterRing":"Outer ring","strAddPoint":"Add a point","strAddInnerRing":"Add an inner ring","strYes":"Yes","strCopyEncryptionKey":"Do you want to copy encryption key?","strEncryptionKey":"Encryption key","HexConversionInfo":"The HEX function will treat the integer as a string while calculating the hexadecimal value","strMysqlAllowedValuesTipTime":"MySQL accepts additional values not selectable by the slider; key in those values directly if desired","strMysqlAllowedValuesTipDate":"MySQL accepts additional values not selectable by the datepicker; key in those values directly if desired","strLockToolTip":"Indicates that you have made changes to this page; you will be prompted for confirmation before abandoning changes","strSelectReferencedKey":"Select referenced key","strSelectForeignKey":"Select Foreign Key","strPleaseSelectPrimaryOrUniqueKey":"Please select the primary key or a unique key!","strChangeDisplay":"Choose column to display","strLeavingDesigner":"You haven't saved the changes in the layout. They will be lost if you don't save them. Do you want to continue?","strQueryEmpty":"value\/subQuery is empty","strAddTables":"Add tables from other databases","strPageName":"Page name","strSavePage":"Save page","strSavePageAs":"Save page as","strOpenPage":"Open page","strDeletePage":"Delete page","strSavedPageTableMissing":"Some tables saved in this page might have been renamed or deleted.","strUntitled":"Untitled","strSelectPage":"Please select a page to continue","strEnterValidPageName":"Please enter a valid page name","strLeavingPage":"Do you want to save the changes to the current page?","strSuccessfulPageDelete":"Successfully deleted the page","strExportRelationalSchema":"Export relational schema","strModificationSaved":"Modifications have been saved","strObjectsCreated":"%d object(s) created.","strColumnName":"Column name","strSubmit":"Submit","strCellEditHint":"Press escape to cancel editing.<br>- Shift+Enter for a newline.","strSaveCellWarning":"You have edited some data and they have not been saved. Are you sure you want to leave this page before saving the data?","strColOrderHint":"Drag to reorder.","strSortHint":"Click to sort results by this column.","strMultiSortHint":"Shift+Click to add this column to ORDER BY clause or to toggle ASC\/DESC.<br>- Ctrl+Click or Alt+Click (Mac: Shift+Option+Click) to remove column from ORDER BY clause","strColMarkHint":"Click to mark\/unmark.","strColNameCopyHint":"Double-click to copy column name.","strColVisibHint":"Click the drop-down arrow<br>to toggle column's visibility.","strShowAllCol":"Show all","strAlertNonUnique":"This table does not contain a unique column. Features related to the grid edit, checkbox, Edit, Copy and Delete links may not work after saving.","strEnterValidHex":"Please enter a valid hexadecimal string. Valid characters are 0-9, A-F.","strShowAllRowsWarning":"Do you really want to see all of the rows? For a big table this could crash the browser.","strOriginalLength":"Original length","dropImportMessageCancel":"cancel","dropImportMessageAborted":"Aborted","dropImportMessageFailed":"Failed","dropImportMessageSuccess":"Success","dropImportImportResultHeader":"Import status","dropImportDropFiles":"Drop files here","dropImportSelectDB":"Select database first","strGridEditFeatureHint":"You can also edit most values<br>by double-clicking directly on them.","strGoToLink":"Go to link:","strGeneratePassword":"Generate password","strGenerate":"Generate","strChangePassword":"Change password","strMore":"More","strShowPanel":"Show panel","strHidePanel":"Hide panel","linkWithMain":"Link with main panel","unlinkWithMain":"Unlink from main panel","strNewerVersion":"A newer version of phpMyAdmin is available and you should consider upgrading. The newest version is %s, released on %s.","strLatestAvailable":", latest stable version:","strUpToDate":"up to date","strErrorOccurred":"A fatal JavaScript error has occurred. Would you like to send an error report?","strChangeReportSettings":"Change report settings","strShowReportDetails":"Show report details","strTimeOutError":"Your export is incomplete, due to a low execution time limit at the PHP level!","strTooManyInputs":"Warning: a form on this page has more than %d fields. On submission, some of the fields might be ignored, due to PHP's max_input_vars configuration.","phpErrorsFound":"<div class=\"alert alert-danger\" role=\"alert\">Some errors have been detected on the server!<br>Please look at the bottom of this window.<div><input id=\"pma_ignore_errors_popup\" type=\"submit\" value=\"Ignore\" class=\"btn btn-secondary float-end message_errors_found\"><input id=\"pma_ignore_all_errors_popup\" type=\"submit\" value=\"Ignore All\" class=\"btn btn-secondary float-end message_errors_found\"><\/div><\/div>","phpErrorsBeingSubmitted":"<div class=\"alert alert-danger\" role=\"alert\">Some errors have been detected on the server!<br>As per your settings, they are being submitted currently, please be patient.<br><img src=\".\/themes\/pmahomme\/img\/ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\"><\/div>","strCopyColumnSuccess":"Column name successfully copied to clipboard!","strCopyColumnFailure":"Column name copying to clipboard failed!","strCopyQueryButtonSuccess":"Successfully copied!","strCopyQueryButtonFailure":"Copying failed!","strConsoleRequeryConfirm":"Execute this query again?","strConsoleDeleteBookmarkConfirm":"Do you really want to delete this bookmark?","strConsoleDebugError":"Some error occurred while getting SQL debug info.","strConsoleDebugSummary":"%s queries executed %s times in %s seconds.","strConsoleDebugArgsSummary":"%s argument(s) passed","strConsoleDebugShowArgs":"Show arguments","strConsoleDebugHideArgs":"Hide arguments","strConsoleDebugTimeTaken":"Time taken:","strNoLocalStorage":"There was a problem accessing your browser storage, some features may not work properly for you. It is likely that the browser doesn't support storage or the quota limit has been reached. In Firefox, corrupted storage can also cause such a problem, clearing your \"Offline Website Data\" might help. In Safari, such problem is commonly caused by \"Private Mode Browsing\".","strCopyTablesTo":"Copy tables to","strAddPrefix":"Add table prefix","strReplacePrefix":"Replace table with prefix","strCopyPrefix":"Copy table with prefix","strExtrWeak":"Extremely weak","strVeryWeak":"Very weak","strWeak":"Weak","strGood":"Good","strStrong":"Strong","strU2FTimeout":"Timed out waiting for security key activation.","strU2FBadRequest":"Invalid request sent to security key.","strU2FUnknown":"Unknown security key error.","strU2FInvalidClient":"Client does not support security key.","strU2FErrorRegister":"Failed security key activation.","strU2FErrorAuthenticate":"Invalid security key.","strIndexedDBNotWorking":"You can not open, save or delete your page layout, as IndexedDB is not working in your browser and your phpMyAdmin configuration storage is not configured for this.","strTableAlreadyExists":"Table %s already exists!","strHide":"Hide","strShow":"Show","strStructure":"Structure"};