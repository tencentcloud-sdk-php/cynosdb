<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跨地域备份各地域备份信息
 *
 * @method string getCrossRegion() 获取备份的目标地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossRegion(string $CrossRegion) 设置备份的目标地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupId() 获取目标地域的备份任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupId(string $BackupId) 设置目标地域的备份任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupStatus() 获取目标地域的备份状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupStatus(string $BackupStatus) 设置目标地域的备份状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class CrossRegionBackupItem extends AbstractModel
{
    /**
     * @var string 备份的目标地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossRegion;

    /**
     * @var string 目标地域的备份任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupId;

    /**
     * @var string 目标地域的备份状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupStatus;

    /**
     * @param string $CrossRegion 备份的目标地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupId 目标地域的备份任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupStatus 目标地域的备份状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CrossRegion",$param) and $param["CrossRegion"] !== null) {
            $this->CrossRegion = $param["CrossRegion"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }
    }
}