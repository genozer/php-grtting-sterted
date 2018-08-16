<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\KitchenSink;

class Setting
{
    public static function getSetting()
    {
        return [
            'settings' => [
                'displayErrorDetails' => true, // set to false in production

                'logger' => [
                    'name' => 'botaiham',
                    'path' => __DIR__ . '/../../../logs/app.log',
                ],

                'bot' => [
                    'channelToken' => getenv('cdqD4RFGzeU5tttrg7CQ/dbq07UADXVy5fp4ql+ZNJr2MWgRfxVC6KKIf/owAa43+r8HEt2soyaPVdsm6YLEXjv1ai6KUhWSJHmrhye+oQdMkYkMk6yU03hLXOIRb1efQXkNC0SOGazz+5nC+9RSogdB04t89/1O/w1cDnyilFU=') ?:,
                    'channelSecret' => getenv('63e04d8f172bc2d325ac3fc31e1bf2b3') ?:,
                ],

                'apiEndpointBase' => getenv('LINEBOT_API_ENDPOINT_BASE'),
            ],
        ];
    }
}
