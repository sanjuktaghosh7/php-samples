<?php
/**
 * Copyright 2022 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

 require 'src/sheets_pivot_tables.php';

 class SpreadSheetPivotTablesTest extends \PHPUnit\Framework\TestCase
 {
    public function testSpreadSheetPivotTables()
    {   
        $spreadSheet = pivotTables('1sN_EOj0aYp5hn9DeqSY72G7sKaFRg82CsMGnK_Tooa8');
        $this->assertNotNull($spreadSheet, 'No result returned.');
    }
 }