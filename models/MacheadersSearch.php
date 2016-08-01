<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Macheaders;

/**
 * MacheadersSearch represents the model behind the search form about `app\models\Macheaders`.
 */
class MacheadersSearch extends Macheaders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        [['packetId', 'protocolVersion', 'type', 'subtype', 'toDS', 'fromDS', 'moreFragments', 'retry', 'powerMgmt', 'moreData', 'protectedFrame', 'ord', 'durationId', 'fragmentNumber', 'seqNumber', 'QoSControl', 'HTControl'], 'integer'],
        [['addr1', 'addr2', 'addr3', 'addr4'], 'safe'],
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
        $query = Macheaders::find();

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
            'protocolVersion' => $this->protocolVersion,
            'type' => $this->type,
            'subtype' => $this->subtype,
            'toDS' => $this->toDS,
            'fromDS' => $this->fromDS,
            'moreFragments' => $this->moreFragments,
            'retry' => $this->retry,
            'powerMgmt' => $this->powerMgmt,
            'moreData' => $this->moreData,
            'protectedFrame' => $this->protectedFrame,
            'ord' => $this->ord,
            'durationId' => $this->durationId,
            'fragmentNumber' => $this->fragmentNumber,
            'seqNumber' => $this->seqNumber,
            'QoSControl' => $this->QoSControl,
            'HTControl' => $this->HTControl,
            ]);

        $query->andFilterWhere(['like', 'addr1', $this->addr1])
        ->andFilterWhere(['like', 'addr2', $this->addr2])
        ->andFilterWhere(['like', 'addr3', $this->addr3])
        ->andFilterWhere(['like', 'addr4', $this->addr4]);

        return $dataProvider;
    }


    public function searchForConsulta($columns,$values)
    {
        $query = Macheaders::find();
        var_dump($columns);
    }
}
