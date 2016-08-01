<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Packets;

/**
 * PacketsSearch represents the model behind the search form about `app\models\Packets`.
 */
class PacketsSearch extends Packets
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['packetId', 'mark', 'length'], 'integer'],
            [['source', 'comment'], 'safe'],
            [['timestamp'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Packets::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'packetId' => $this->packetId,
            'mark' => $this->mark,
            'timestamp' => $this->timestamp,
            'length' => $this->length,
        ]);

        $query->andFilterWhere(['like', 'source', $this->source])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
