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
 * 集群从可用区信息
 *
 * @method string getOldMasterZone() 获取旧主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldMasterZone(string $OldMasterZone) 设置旧主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOldSlaveZone() 获取旧从可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOldSlaveZone(array $OldSlaveZone) 设置旧从可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNewMasterZone() 获取新主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewMasterZone(string $NewMasterZone) 设置新主可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNewSlaveZone() 获取新从可用区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNewSlaveZone(array $NewSlaveZone) 设置新从可用区
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterSlaveData extends AbstractModel
{
    /**
     * @var string 旧主可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldMasterZone;

    /**
     * @var array 旧从可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OldSlaveZone;

    /**
     * @var string 新主可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewMasterZone;

    /**
     * @var array 新从可用区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NewSlaveZone;

    /**
     * @param string $OldMasterZone 旧主可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OldSlaveZone 旧从可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NewMasterZone 新主可用区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NewSlaveZone 新从可用区
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
        if (array_key_exists("OldMasterZone",$param) and $param["OldMasterZone"] !== null) {
            $this->OldMasterZone = $param["OldMasterZone"];
        }

        if (array_key_exists("OldSlaveZone",$param) and $param["OldSlaveZone"] !== null) {
            $this->OldSlaveZone = $param["OldSlaveZone"];
        }

        if (array_key_exists("NewMasterZone",$param) and $param["NewMasterZone"] !== null) {
            $this->NewMasterZone = $param["NewMasterZone"];
        }

        if (array_key_exists("NewSlaveZone",$param) and $param["NewSlaveZone"] !== null) {
            $this->NewSlaveZone = $param["NewSlaveZone"];
        }
    }
}
